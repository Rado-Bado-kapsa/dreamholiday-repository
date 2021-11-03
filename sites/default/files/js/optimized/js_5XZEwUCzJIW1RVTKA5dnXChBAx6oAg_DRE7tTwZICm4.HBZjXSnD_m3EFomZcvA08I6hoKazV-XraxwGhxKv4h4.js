/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.toggle.js. */
(function(t,e){'use strict';e.webform=e.webform||{};e.webform.detailsToggle=e.webform.detailsToggle||{};e.webform.detailsToggle.options=e.webform.detailsToggle.options||{};e.behaviors.webformDetailsToggle={attach:function(l){t('.js-webform-details-toggle',l).once('webform-details-toggle').each(function(){var l=t(this),o=l.find('.webform-tabs'),n=(o.length)?'.webform-tab':'.js-webform-details-toggle, .webform-elements',i=l.find('details').filter(function(){var e=t(this).parentsUntil(n);return(e.find('details').length===0)});if(i.length<2){return};var s=t.extend({button:'<button type="button" class="webform-details-toggle-state"></button>'},e.webform.detailsToggle.options);var a=t(s.button).attr('title',e.t('Toggle details widget state.')).on('click',function(o){var a=l.find('details:not(.vertical-tabs__pane)'),i;if(e.webform.detailsToggle.isFormDetailsOpen(l)){a.removeAttr('open');i=0}
else{a.attr('open','open');i=1};e.webform.detailsToggle.setDetailsToggleLabel(l);if(e.webformDetailsSaveGetName){a.each(function(){var l=e.webformDetailsSaveGetName(t(this));if(l){localStorage.setItem(l,i)}})}}).wrap('<div class="webform-details-toggle-state-wrapper"></div>').parent();if(o.length){o.find('.item-list:first-child').eq(0).before(a)}
else{i.eq(0).before(a)};e.webform.detailsToggle.setDetailsToggleLabel(l)})}};e.webform.detailsToggle.isFormDetailsOpen=function(e){return(e.find('details[open]').length===e.find('details').length)};e.webform.detailsToggle.setDetailsToggleLabel=function(t){var l=e.webform.detailsToggle.isFormDetailsOpen(t),a=(l)?e.t('Collapse all'):e.t('Expand all');t.find('.webform-details-toggle-state').html(a);var o=(l)?e.t('All details have been expanded.'):e.t('All details have been collapsed.');e.announce(o)}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.toggle.js. */