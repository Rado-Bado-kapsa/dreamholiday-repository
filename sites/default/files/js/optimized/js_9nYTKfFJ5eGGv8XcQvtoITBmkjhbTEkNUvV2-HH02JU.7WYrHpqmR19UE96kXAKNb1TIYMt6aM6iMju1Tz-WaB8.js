/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.roles.js. */
(function(e,t){'use strict';t.behaviors.webformRoles={attach:function(t){e(t).find('.js-webform-roles-role[value="authenticated"]').once('webform-roles').each(function(){var t=e(this),o=t.parents('.form-checkboxes').find('.js-webform-roles-role').filter(function(){return(e(this).val()!=='anonymous'&&e(this).val()!=='authenticated')});t.on('click',function(){if(t.is(':checked')){o.prop('checked',!0).attr('disabled',!0)}
else{o.prop('checked',!1).removeAttr('disabled')}});if(t.is(':checked')){o.prop('checked',!0).attr('disabled',!0)}})}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.roles.js. */