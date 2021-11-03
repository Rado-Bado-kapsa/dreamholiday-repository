/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.codemirror.js. */
(function(e,r){'use strict';r.webform=r.webform||{};r.webform.codeMirror=r.webform.codeMirror||{};r.webform.codeMirror.options=r.webform.codeMirror.options||{};r.behaviors.webformCodeMirror={attach:function(o){if(!window.CodeMirror){return};e(o).find('textarea.js-webform-codemirror').once('webform-codemirror').each(function(){var o=e(this),d=o.parents('details:not([open])');d.attr('open','open');o.removeAttr('required');var s=e.extend({mode:o.attr('data-webform-codemirror-mode'),lineNumbers:!0,lineWrapping:(o.attr('wrap')!=='off'),viewportMargin:Infinity,readOnly:!!(o.prop('readonly')||o.prop('disabled')),extraKeys:{Tab:function(e){var r=Array(e.getOption('indentUnit')+1).join(' ');e.replaceSelection(r,'end','+element')},Esc:function(r){var o=e(r.getTextArea());e(o).show().addClass('visually-hidden');var i=e(':tabbable'),t=i.index(o);e(o).hide().removeClass('visually-hidden');i.eq(t+2).trigger('focus')}}},r.webform.codeMirror.options);var i=CodeMirror.fromTextArea(this,s);d.removeAttr('open');if(o.css('min-height')){var a=o.css('min-height');e(i.getWrapperElement()).css('min-height',a).find('.CodeMirror-scroll').css('min-height',a)};if(o.css('max-height')){var n=o.css('max-height');e(i.getWrapperElement()).css('max-height',n).find('.CodeMirror-scroll').css('max-height',n)};var t=null;i.on('change',function(){if(t){window.clearTimeout(t);t=null};t=setTimeout(function(){i.save()},500)});o.on('change',function(){i.getDoc().setValue(o.val())});o.on('webform:disabled',function(){i.setOption('readOnly',o.is(':disabled'))});setTimeout(function(){var e=o.parents('.ui-tabs-panel:hidden'),r=o.parents('details:not([open])');if(!e.length&&r.length){return};e.show();r.attr('open','open');i.refresh();e.hide();r.removeAttr('open')},500)});if(window.CodeMirror.runMode){e(o).find('.js-webform-codemirror-runmode').once('webform-codemirror-runmode').each(function(){CodeMirror.runMode(e(this).addClass('cm-s-default').text(),e(this).attr('data-webform-codemirror-mode'),this)})}}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.codemirror.js. */