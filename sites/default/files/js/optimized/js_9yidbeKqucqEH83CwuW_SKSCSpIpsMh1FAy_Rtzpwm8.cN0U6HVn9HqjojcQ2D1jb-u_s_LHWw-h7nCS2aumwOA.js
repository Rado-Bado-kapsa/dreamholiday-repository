/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/toolbar/js/escapeAdmin.js. */
(function(e,t,i){var a=i.path,n=sessionStorage.getItem('escapeAdminPath'),s=window.location;if(!a.currentPathIsAdmin&&!/destination=/.test(s.search)){sessionStorage.setItem('escapeAdminPath',s)};t.behaviors.escapeAdmin={attach:function(){var s=e('[data-toolbar-escape-admin]').once('escapeAdmin');if(s.length&&a.currentPathIsAdmin){if(n!==null){s.attr('href',n)}
else{s.text(t.t('Home'))}}}}})(jQuery,Drupal,drupalSettings);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/toolbar/js/escapeAdmin.js. */