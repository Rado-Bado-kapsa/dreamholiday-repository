/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/node/content_types.js. */
(function(t,i){i.behaviors.contentTypes={attach:function(e){var n=t(e);n.find('#edit-submission').drupalSetSummary(function(e){var n=[];n.push(i.checkPlain(t(e).find('#edit-title-label').val())||i.t('Requires a title'));return n.join(', ')});n.find('#edit-workflow').drupalSetSummary(function(e){var n=[];t(e).find('input[name^="options"]:checked').next('label').each(function(){n.push(i.checkPlain(t(this).text()))});if(!t(e).find('#edit-options-status').is(':checked')){n.unshift(i.t('Not published'))};return n.join(', ')});t('#edit-language',e).drupalSetSummary(function(e){var n=[];n.push(t('.js-form-item-language-configuration-langcode select option:selected',e).text());t('input:checked',e).next('label').each(function(){n.push(i.checkPlain(t(this).text()))});return n.join(', ')});n.find('#edit-display').drupalSetSummary(function(e){var n=[],a=t(e);a.find('input:checked').next('label').each(function(){n.push(i.checkPlain(t(this).text()))});if(!a.find('#edit-display-submitted').is(':checked')){n.unshift(i.t('Don\'t display post information'))};return n.join(', ')})}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/node/content_types.js. */