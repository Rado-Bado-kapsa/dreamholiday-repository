/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/editor/js/editor.js. */
(function(t,e,i){function r(e){var i=e.attr('data-editor-for');return t('#'+i).get(0)};function a(i,r,o,a){if(r.editor.isXssSafe){a(i,r)}
else{t.ajax({url:e.url('editor/filter_xss/'+r.format),type:'POST',data:{value:i.value,original_format_id:o},dataType:'json',success:function(t){if(t!==!1){i.value=t};a(i,r)}})}};function o(r,o){var d=r.getAttribute('data-editor-active-text-format');if(i.editor.formats[d]){e.editorDetach(r,i.editor.formats[d])}
else{t(r).off('.editor')};if(i.editor.formats[o]){var n=i.editor.formats[o];a(r,n,d,e.editorAttach)};r.setAttribute('data-editor-active-text-format',o)};function d(r){var f=t(r.target),d=r.data.field,s=d.getAttribute('data-editor-active-text-format'),a=f.val();if(a===s){return};var l=i.editor.formats[a]&&i.editor.formats[a].editorSupportsContentFiltering,u=d.value!=='';if(u&&l){var c=e.t('Changing the text format to %text_format will permanently remove content that is not allowed in that text format.<br><br>Save your changes before switching the text format to avoid losing data.',{'%text_format':f.find('option:selected').text()});var n=e.dialog('<div>'+c+'</div>',{title:e.t('Change text format?'),dialogClass:'editor-change-text-format-modal',resizable:!1,buttons:[{text:e.t('Continue'),class:'button button--primary',click:function(){o(d,a);n.close()}},{text:e.t('Cancel'),class:'button',click:function(){f.val(s);n.close()}}],closeOnEscape:!1,create:function(){t(this).parent().find('.ui-dialog-titlebar-close').remove()},beforeClose:!1,close:function(e){t(e.target).remove()}});n.showModal()}
else{o(d,a)}};e.editors={};e.behaviors.editor={attach:function(i,o){if(!o.editor){return};t(i).find('[data-editor-for]').once('editor').each(function(){var n=t(this),i=r(n);if(!i){return};var a=n.val();i.setAttribute('data-editor-active-text-format',a);if(o.editor.formats[a]){e.editorAttach(i,o.editor.formats[a])};t(i).on('change.editor keypress.editor',function(){i.setAttribute('data-editor-value-is-changed','true');t(i).off('.editor')});if(n.is('select')){n.on('change.editorAttach',{field:i},d)};n.parents('form').on('submit',function(t){if(t.isDefaultPrevented()){return};if(o.editor.formats[a]){e.editorDetach(i,o.editor.formats[a],'serialize')}})})},detach:function(i,o,a){var d=void 0;if(a==='serialize'){d=t(i).find('[data-editor-for]').findOnce('editor')}
else{d=t(i).find('[data-editor-for]').removeOnce('editor')};d.each(function(){var i=t(this),d=i.val(),n=r(i);if(n&&d in o.editor.formats){e.editorDetach(n,o.editor.formats[d],a)}})}};e.editorAttach=function(i,r){if(r.editor){e.editors[r.editor].attach(i,r);e.editors[r.editor].onChange(i,function(){t(i).trigger('formUpdated');i.setAttribute('data-editor-value-is-changed','true')})}};e.editorDetach=function(t,i,r){if(i.editor){e.editors[i.editor].detach(t,i,r);if(t.getAttribute('data-editor-value-is-changed')==='false'){t.value=t.getAttribute('data-editor-value-original')}}}})(jQuery,Drupal,drupalSettings);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/editor/js/editor.js. */