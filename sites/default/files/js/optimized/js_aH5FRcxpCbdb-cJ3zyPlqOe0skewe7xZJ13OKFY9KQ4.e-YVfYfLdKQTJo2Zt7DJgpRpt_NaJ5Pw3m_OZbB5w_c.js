/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/admin_toolbar/admin_toolbar_search/js/admin_toolbar_search.js. */
(function(t,a){'use strict';a.behaviors.adminToolbarSearch={extraFetched:!1,attach:function(e){if(e!=document){return};var n=this;this.links=[];t('#admin-toolbar-search-input').autocomplete({minLength:2,source:function(e,i){var o=n.handleAutocomplete(e.term);if(!n.extraFetched&&drupalSettings.adminToolbarSearch.loadExtraLinks){t.getJSON(a.url('admin/admin-toolbar-search'),function(a){t(a).each(function(){var t=this;t.label=this.labelRaw+' '+this.value;n.links.push(t)});n.extraFetched=!0;var o=n.handleAutocomplete(e.term);i(o)})}
else{i(o)}},open:function(){var a=t('#toolbar-item-administration-tray').css('z-index')+1;t(this).autocomplete('widget').css('z-index',a);return!1},select:function(t,a){if(a.item.value){location.href=a.item.value;return!1}}}).data('ui-autocomplete')._renderItem=(function(a,e){a.addClass('admin-toolbar-search-autocomplete-list');return t('<li>').append('<div>'+e.labelRaw+'<span class="admin-toolbar-search-url">'+e.value+'</span></div>').appendTo(a)});t(e).find('#admin-toolbar-search-input').once('admin_toolbar_search').each(function(){t(this).focus(function(){a.behaviors.adminToolbarSearch.populateLinks(n)})})},getItemLabel:function(a){var e=[];t(a).parents().each(function(){if(t(this).hasClass('menu-item')){var a=t(this).find('a:first');if(a.length&&!a.hasClass('admin-toolbar-search-ignore')){e.unshift(a.text())}}});return e.join(' > ')},handleAutocomplete:function(t){var n=this,e=t.split(' '),a=[];n.links.forEach(function(n){var o=n.label.toLowerCase();if(o.indexOf(t.toLowerCase())>=0){a.push(n)}
else{var i=0;e.forEach(function(t){if(o.indexOf(t.toLowerCase())>=0){i++}});if(i==e.length){a.push(n)}}});return a},populateLinks:function(e){if(e.links.length===0){var n=window.location,i=n.protocol+'//'+n.host+'/';t('.toolbar-tray a[data-drupal-link-system-path]').each(function(){if(this.href!==i){var t=e.getItemLabel(this);e.links.push({'value':this.href,'label':t+' '+this.href,'labelRaw':a.checkPlain(t)})}})}},}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/admin_toolbar/admin_toolbar_search/js/admin_toolbar_search.js. */