/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/misc/autocomplete.js. */
(function(t,a){var e=void 0;function o(e){var i=[],r=!1,a='',c=e.length,o=void 0;for(var n=0;n<c;n++){o=e.charAt(n);if(o==='"'){a+=o;r=!r}
else if(o===','&&!r){i.push(a.trim());a=''}
else{a+=o}};if(e.length>0){i.push(t.trim(a))};return i};function n(t){return e.splitValues(t).pop()};function i(t){var o=e.options;if(o.isComposing){return!1};var a=e.extractLastTerm(t.target.value);if(a.length>0&&o.firstCharacterBlacklist.indexOf(a[0])!==-1){return!1};return a.length>=o.minLength};function r(a,o){var n=this.element.attr('id');if(!(n in e.cache)){e.cache[n]={}};function r(t){var r=e.splitValues(a.term),c=r.length;for(var n=0;n<c;n++){var i=t.indexOf(r[n]);if(i>=0){t.splice(i,1)}};o(t)};var i=e.extractLastTerm(a.term);function s(t){e.cache[n][i]=t;r(t)};if(e.cache[n].hasOwnProperty(i)){r(e.cache[n][i])}
else{var c=t.extend({success:s,data:{q:i}},e.ajax);t.ajax(this.element.attr('data-autocomplete-path'),c)}};function c(){return!1};function s(t,a){var o=e.splitValues(t.target.value);o.pop();o.push(a.item.value);t.target.value=o.join(', ');return!1};function u(e,a){return t('<li>').append(t('<a>').html(a.label)).appendTo(e)};a.behaviors.autocomplete={attach:function(a){var o=t(a).find('input.form-autocomplete').once('autocomplete');if(o.length){var n=o.attr('data-autocomplete-first-character-blacklist');t.extend(e.options,{firstCharacterBlacklist:n||''});o.autocomplete(e.options).each(function(){t(this).data('ui-autocomplete')._renderItem=e.options.renderItem});o.on('compositionstart.autocomplete',function(){e.options.isComposing=!0});o.on('compositionend.autocomplete',function(){e.options.isComposing=!1})}},detach:function(e,a,o){if(o==='unload'){t(e).find('input.form-autocomplete').removeOnce('autocomplete').autocomplete('destroy')}}};e={cache:{},splitValues:o,extractLastTerm:n,options:{source:r,focus:c,search:i,select:s,renderItem:u,minLength:1,firstCharacterBlacklist:'',isComposing:!1},ajax:{dataType:'json',jsonp:!1}};a.autocomplete=e})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/misc/autocomplete.js. */