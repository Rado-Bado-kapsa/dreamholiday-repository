/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.jquery.ui.dialog.js. */
(function(t,o){'use strict';var e=t.ui.dialog.prototype._allowInteraction;t.ui.dialog.prototype._allowInteraction=function(o){if(t(o.target).closest('.cke_dialog').length){return!0};return e.apply(this,arguments)};o.behaviors.webformDialogEvents={attach:function(){t(window).once('webform-dialog').on({'dialog:aftercreate':function(o,e,t,n){setTimeout(function(){var o=t.find('[autofocus]:tabbable');if(!o.length){o=t.find(':input:tabbable:not(:button)')};if(!o.length){o=t.parent().find('.ui-dialog-titlebar-close')};o.eq(0).trigger('focus')})}})}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.jquery.ui.dialog.js. */