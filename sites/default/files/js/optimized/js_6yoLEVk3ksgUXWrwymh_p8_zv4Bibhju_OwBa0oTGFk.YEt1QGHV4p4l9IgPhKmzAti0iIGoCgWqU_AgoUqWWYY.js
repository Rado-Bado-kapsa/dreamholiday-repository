/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/matomo/js/matomo.admin.js. */
(function(t){'use strict';Drupal.behaviors.trackingSettingsSummary={attach:function(){if(typeof jQuery.fn.drupalSetSummary==='undefined'){return};t('#edit-page-visibility-settings').drupalSetSummary(function(e){var i=t('input[name="matomo_visibility_request_path_mode"]:checked',e);if(i.val()==='0'){if(!t('textarea[name="matomo_visibility_request_path_pages"]',e).val()){return Drupal.t('Not restricted')}
else{return Drupal.t('All pages with exceptions')}}
else{return Drupal.t('Restricted to certain pages')}});t('#edit-role-visibility-settings').drupalSetSummary(function(e){var i=[];t('input[type="checkbox"]:checked',e).each(function(){i.push(t.trim(t(this).next('label').text()))});if(!i.length){return Drupal.t('Not restricted')}
else if(t('input[name="matomo_visibility_user_role_mode"]:checked',e).val()==='1'){return Drupal.t('Excepted: @roles',{'@roles':i.join(', ')})}
else{return i.join(', ')}});t('#edit-user-visibility-settings').drupalSetSummary(function(e){var i=t('input[name="matomo_visibility_user_account_mode"]:checked',e);if(i.val()==='0'){return Drupal.t('Not customizable')}
else if(i.val()==='1'){return Drupal.t('On by default with opt out')}
else{return Drupal.t('Off by default with opt in')}});t('#edit-linktracking').drupalSetSummary(function(e){var i=[];if(t('input#edit-matomo-trackmailto',e).is(':checked')){i.push(Drupal.t('Mailto links'))};if(t('input#edit-matomo-trackfiles',e).is(':checked')){i.push(Drupal.t('Outbound links'));i.push(Drupal.t('Downloads'))};if(t('input#edit-matomo-trackcolorbox',e).is(':checked')){i.push(Drupal.t('Colorbox'))};if(!i.length){return Drupal.t('Not tracked')};return Drupal.t('@items enabled',{'@items':i.join(', ')})});t('#edit-messagetracking').drupalSetSummary(function(e){var i=[];t('input[type="checkbox"]:checked',e).each(function(){i.push(t.trim(t(this).next('label').text()))});if(!i.length){return Drupal.t('Not tracked')};return Drupal.t('@items enabled',{'@items':i.join(', ')})});t('#edit-search').drupalSetSummary(function(e){var i=[];if(t('input#edit-matomo-site-search',e).is(':checked')){i.push(Drupal.t('Site search'))};if(!i.length){return Drupal.t('Not tracked')};return Drupal.t('@items enabled',{'@items':i.join(', ')})});t('#edit-domain-tracking').drupalSetSummary(function(e){var i=t('input[name="matomo_domain_mode"]:checked',e);if(i.val()==='0'){return Drupal.t('A single domain')}
else if(i.val()==='1'){return Drupal.t('One domain with multiple subdomains')}});t('#edit-page-title-hierarchy').drupalSetSummary(function(e){var i=[];if(t('input#edit-matomo-page-title-hierarchy',e).is(':checked')){i.push(Drupal.t('Show page titles'))};if(t('input#edit-matomo-page-title-hierarchy-exclude-home',e).is(':checked')){i.push(Drupal.t('Hide home page'))};if(!i.length){return Drupal.t('Not tracked')};return Drupal.t('@items enabled',{'@items':i.join(', ')})});t('#edit-privacy').drupalSetSummary(function(e){var i=[];if(t('input#edit-matomo-privacy-donottrack',e).is(':checked')){i.push(Drupal.t('Universal web tracking opt-out enabled'))};if(t('input#edit-matomo-privacy-disablecookies',e).is(':checked')){i.push(Drupal.t('Cookies disabled'))};if(!i.length){return Drupal.t('No privacy')};return Drupal.t('@items',{'@items':i.join(', ')})})}}})(jQuery);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/matomo/js/matomo.admin.js. */