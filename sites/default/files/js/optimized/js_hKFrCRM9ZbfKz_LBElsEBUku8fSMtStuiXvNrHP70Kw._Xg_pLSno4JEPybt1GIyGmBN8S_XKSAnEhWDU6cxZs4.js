/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/menu_ui/menu_ui.js. */
(function(e,i){i.behaviors.menuUiDetailsSummaries={attach:function(t){e(t).find('.menu-link-form').drupalSetSummary(function(t){var n=e(t);if(n.find('.js-form-item-menu-enabled input').is(':checked')){return i.checkPlain(n.find('.js-form-item-menu-title input').val())};return i.t('Not in menu')})}};i.behaviors.menuUiLinkAutomaticTitle={attach:function(i){var t=e(i);t.find('.menu-link-form').each(function(){var r=e(this),n=r.find('.js-form-item-menu-enabled input'),i=t.find('.js-form-item-menu-title input'),a=r.closest('form').find('.js-form-item-title-0-value input');if(!(n.length&&i.length&&a.length)){return};if(n.is(':checked')&&i.val().length){i.data('menuLinkAutomaticTitleOverridden',!0)};i.on('keyup',function(){i.data('menuLinkAutomaticTitleOverridden',!0)});n.on('change',function(){if(n.is(':checked')){if(!i.data('menuLinkAutomaticTitleOverridden')){i.val(a.val())}}
else{i.val('');i.removeData('menuLinkAutomaticTitleOverridden')};n.closest('.vertical-tabs-pane').trigger('summaryUpdated');n.trigger('formUpdated')});a.on('keyup',function(){if(!i.data('menuLinkAutomaticTitleOverridden')&&n.is(':checked')){i.val(a.val());i.val(a.val()).trigger('formUpdated')}})})}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/menu_ui/menu_ui.js. */