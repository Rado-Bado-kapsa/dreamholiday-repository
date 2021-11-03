/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/misc/dialog/dialog.ajax.js. */
(function(o,t){t.behaviors.dialog={attach:function(t,i){var e=o(t);if(!o('#drupal-modal').length){o('<div id="drupal-modal" class="ui-front"></div>').hide().appendTo('body')};var a=e.closest('.ui-dialog-content');if(a.length){if(a.dialog('option','drupalAutoButtons')){a.trigger('dialogButtonsChange')};a.dialog('widget').trigger('focus')};var n=i.dialog.close;i.dialog.close=function(t){for(var e=arguments.length,l=Array(e>1?e-1:0),a=1;a<e;a++){l[a-1]=arguments[a]};n.apply(i.dialog,[t].concat(l));o(t.target).remove()}},prepareDialogButtons:function(t){var i=[],a=t.find('.form-actions input[type=submit], .form-actions a.button');a.each(function(){var t=o(this).css({display:'none'});i.push({text:t.html()||t.attr('value'),class:t.attr('class'),click:function(o){if(t.is('a')){t[0].click()}
else{t.trigger('mousedown').trigger('mouseup').trigger('click');o.preventDefault()}}})});return i}};t.AjaxCommands.prototype.openDialog=function(a,i,e){if(!i.selector){return!1};var n=o(i.selector);if(!n.length){n=o('<div id="'+i.selector.replace(/^#/,'')+'" class="ui-front"></div>').appendTo('body')};if(!a.wrapper){a.wrapper=n.attr('id')};i.command='insert';i.method='html';a.commands.insert(a,i,e);if(!i.dialogOptions.buttons){i.dialogOptions.drupalAutoButtons=!0;i.dialogOptions.buttons=t.behaviors.dialog.prepareDialogButtons(n)};n.on('dialogButtonsChange',function(){var o=t.behaviors.dialog.prepareDialogButtons(n);n.dialog('option','buttons',o)});i.dialogOptions=i.dialogOptions||{};var l=t.dialog(n.get(0),i.dialogOptions);if(i.dialogOptions.modal){l.showModal()}
else{l.show()};n.parent().find('.ui-dialog-buttonset').addClass('form-actions')};t.AjaxCommands.prototype.closeDialog=function(i,a,n){var e=o(a.selector);if(e.length){t.dialog(e.get(0)).close();if(!a.persist){e.remove()}};e.off('dialogButtonsChange')};t.AjaxCommands.prototype.setDialogOption=function(t,i,a){var n=o(i.selector);if(n.length){n.dialog('option',i.optionName,i.optionValue)}};o(window).on('dialog:aftercreate',function(o,t,i,a){i.on('click.dialog','.dialog-cancel',function(o){t.close('cancel');o.preventDefault();o.stopPropagation()})});o(window).on('dialog:beforeclose',function(o,t,i){i.off('.dialog')})})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/misc/dialog/dialog.ajax.js. */