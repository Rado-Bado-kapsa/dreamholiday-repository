/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.js. */
(function(e,i){'use strict';i.behaviors.webformDetailsInvalid={attach:function(t){e('details :input',t).on('invalid',function(){e(this).parents('details:not([open])').children('summary').trigger('click');if(i.webform&&i.webform.detailsToggle){i.webform.detailsToggle.setDetailsToggleLabel(e(this.form))}})}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.js. */