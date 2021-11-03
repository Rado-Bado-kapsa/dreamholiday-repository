/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/misc/drupal.js. */
;window.Drupal={behaviors:{},locale:{}};(function(t,e,r,n,o,a){t.throwError=function(t){setTimeout(function(){throw t},0)};t.attachBehaviors=function(r,n){r=r||document;n=n||e;var o=t.behaviors;Object.keys(o||{}).forEach(function(e){if(typeof o[e].attach==='function'){try{o[e].attach(r,n)}catch(a){t.throwError(a)}}})};t.detachBehaviors=function(r,n,o){r=r||document;n=n||e;o=o||'unload';var a=t.behaviors;Object.keys(a||{}).forEach(function(e){if(typeof a[e].detach==='function'){try{a[e].detach(r,n,o)}catch(c){t.throwError(c)}}})};t.checkPlain=function(t){t=t.toString().replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#39;');return t};t.formatString=function(e,r){var n={};Object.keys(r||{}).forEach(function(e){switch(e.charAt(0)){case'@':n[e]=t.checkPlain(r[e]);break;case'!':n[e]=r[e];break;default:n[e]=t.theme('placeholder',r[e]);break}});return t.stringReplace(e,n,null)};t.stringReplace=function(e,r,n){if(e.length===0){return e};if(!Array.isArray(n)){n=Object.keys(r||{});n.sort(function(t,e){return t.length-e.length})};if(n.length===0){return e};var c=n.pop(),a=e.split(c);if(n.length){for(var o=0;o<a.length;o++){a[o]=t.stringReplace(a[o],r,n.slice(0))}};return a.join(r[c])};t.t=function(e,o,n){n=n||{};n.context=n.context||'';if(typeof r!=='undefined'&&r.strings&&r.strings[n.context]&&r.strings[n.context][e]){e=r.strings[n.context][e]};if(o){e=t.formatString(e,o)};return e};t.url=function(t){return e.path.baseUrl+e.path.pathPrefix+t};t.url.toAbsolute=function(t){var r=document.createElement('a');try{t=decodeURIComponent(t)}catch(e){};r.setAttribute('href',t);return r.cloneNode(!1).href};t.url.isLocal=function(r){var n=t.url.toAbsolute(r),c=window.location.protocol;if(c==='http:'&&n.indexOf('https:')===0){c='https:'};var o=c+'//'+window.location.host+e.path.baseUrl.slice(0,-1);try{n=decodeURIComponent(n)}catch(a){};try{o=decodeURIComponent(o)}catch(a){};return n===o||n.indexOf(o+'/')===0};t.formatPlural=function(n,o,c,a,u){a=a||{};a['@count']=n;var l=e.pluralDelimiter,f=t.t(o+l+c,a,u).split(l),i=0;if(typeof r!=='undefined'&&r.pluralFormula){i=n in r.pluralFormula?r.pluralFormula[n]:r.pluralFormula.default}
else if(a['@count']!==1){i=1};return f[i]};t.encodePath=function(t){return window.encodeURIComponent(t).replace(/%2F/g,'/')};t.deprecationError=function(t){var r=t.message;if(e.suppressDeprecationErrors===!1&&typeof n!=='undefined'&&n.warn){n.warn('[Deprecation] '+r)}};t.deprecatedProperty=function(e){var r=e.target,n=e.deprecatedProperty,c=e.message;if(!o||!a){return r};return new o(r,{get:function(e,r){for(var i=arguments.length,u=Array(i>2?i-2:0),o=2;o<i;o++){u[o-2]=arguments[o]};if(r===n){t.deprecationError({message:c})};return a.get.apply(a,[e,r].concat(u))}})};t.theme=function(e){if(e in t.theme){var a;for(var n=arguments.length,o=Array(n>1?n-1:0),r=1;r<n;r++){o[r-1]=arguments[r]};return(a=t.theme)[e].apply(a,o)}};t.theme.placeholder=function(e){return'<em class="placeholder">'+t.checkPlain(e)+'</em>'}})(Drupal,window.drupalSettings,window.drupalTranslations,window.console,window.Proxy,window.Reflect);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/misc/drupal.js. */