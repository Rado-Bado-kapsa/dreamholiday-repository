/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.save.js. */
(function(e,r){'use strict';var t=(function(){try{localStorage.setItem('webform','webform');localStorage.removeItem('webform');return!0}catch(e){return!1}}());r.behaviors.webformDetailsSave={attach:function(a){if(!t){return};e('details > summary',a).once('webform-details-summary-save').on('click',function(){var t=e(this).parent();if(t[0].hasAttribute('data-webform-details-nosave')){return};var a=r.webformDetailsSaveGetName(t);if(!a){return};var n=(t.attr('open')!=='open')?'1':'0';localStorage.setItem(a,n)});e('details',a).once('webform-details-save').each(function(){var t=e(this),n=r.webformDetailsSaveGetName(t);if(!n){return};var a=localStorage.getItem(n);if(a===null){return};if(a==='1'){t.attr('open','open')}
else{t.removeAttr('open')}})}};r.webformDetailsSaveGetName=function(e){if(!t){return''};if(e.hasClass('vertical-tabs__pane')){return''};var o=e.attr('data-webform-element-id');if(o){return'Drupal.webform.'+o.replace('--','.')};var a=e.attr('id');if(!a){return''};var n=e.parents('form');if(!n.length||!n.attr('id')){return''};var r=n.attr('id');if(!r){return''};r=r.replace(/--.+?$/,'').replace(/-/g,'_');a=a.replace(/--.+?$/,'').replace(/-/g,'_');return'Drupal.webform.'+r+'.'+a}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.details.save.js. */