/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/views/js/base.js. */
(function(e,t,n){t.Views={};t.Views.parseQueryString=function(t){var s={};var i=t.indexOf('?');if(i!==-1){t=t.substring(i+1)};var e=void 0,r=t.split('&');for(var n=0;n<r.length;n++){e=r[n].split('=');if(e[0]!=='q'&&e[1]){s[decodeURIComponent(e[0].replace(/\+/g,' '))]=decodeURIComponent(e[1].replace(/\+/g,' '))}};return s};t.Views.parseViewArgs=function(e,g){var s={};var r=t.Views.getPath(e),i=t.url(g).substring(n.path.baseUrl.length);if(i&&r.substring(0,i.length+1)===i+'/'){s.view_args=decodeURIComponent(r.substring(i.length+1,r.length));s.view_path=r};return s};t.Views.pathPortion=function(t){var e=window.location.protocol;if(t.substring(0,e.length)===e){t=t.substring(t.indexOf('/',e.length+2))};return t};t.Views.getPath=function(e){e=t.Views.pathPortion(e);e=e.substring(n.path.baseUrl.length,e.length);if(e.substring(0,3)==='?q='){e=e.substring(3,e.length)};var i=['#','?','&'];for(var r=0;r<i.length;r++){if(e.indexOf(i[r])>-1){e=e.substr(0,e.indexOf(i[r]))}};return e}})(jQuery,Drupal,drupalSettings);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/views/js/base.js. */