/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/themes/gavias_lozin/vendor/count-to.js. */
(function(t){t.fn.countTo=function(e){e=e||{};return t(this).each(function(){var a=t.extend({},t.fn.countTo.defaults,{from:t(this).data('from'),to:t(this).data('to'),speed:t(this).data('speed'),refreshInterval:t(this).data('refresh-interval'),decimals:t(this).data('decimals')},e);var i=Math.ceil(a.speed/a.refreshInterval),s=(a.to-a.from)/i,l=this,r=t(this),f=0,n=a.from,o=r.data('countTo')||{};r.data('countTo',o);if(o.interval){clearInterval(o.interval)};o.interval=setInterval(d,a.refreshInterval);c(n);function d(){n+=s;f++;c(n);if(typeof(a.onUpdate)=='function'){a.onUpdate.call(l,n)};if(f>=i){r.removeData('countTo');clearInterval(o.interval);n=a.to;if(typeof(a.onComplete)=='function'){a.onComplete.call(l,n)}}};function c(t){var e=a.formatter.call(l,t,a);r.html(e)}})};t.fn.countTo.defaults={from:0,to:0,speed:1000,refreshInterval:100,decimals:0,formatter:e,onUpdate:null,onComplete:null};function e(t,e){return t.toFixed(e.decimals)}}(jQuery));
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/themes/gavias_lozin/vendor/count-to.js. */