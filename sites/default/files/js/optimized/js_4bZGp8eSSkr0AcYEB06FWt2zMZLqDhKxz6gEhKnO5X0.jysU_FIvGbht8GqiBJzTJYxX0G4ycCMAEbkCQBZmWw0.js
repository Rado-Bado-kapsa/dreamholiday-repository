/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/misc/dialog/dialog.position.js. */
(function(e,o,t,a,i){t.dialog=e.extend({autoResize:!0,maxHeight:'95%'},t.dialog);function n(e){var t=i.offsets,o=t.left-t.right,a=t.top-t.bottom,n=(o>0?'+':'-')+Math.abs(Math.round(o/2))+'px',d=(a>0?'+':'-')+Math.abs(Math.round(a/2))+'px';e.position={my:'center'+(o!==0?n:'')+' center'+(a!==0?d:''),of:window};return e};function d(t){var l=['width','height','minWidth','minHeight','maxHeight','maxWidth','position'],s={};var g=e(window).height(),o=void 0,a=void 0,d=void 0;for(var r=0;r<l.length;r++){o=l[r];a=t.data.settings[o];if(a){if(typeof a==='string'&&/%$/.test(a)&&/height/i.test(o)){g-=i.offsets.top+i.offsets.bottom;d=parseInt(0.01*parseInt(a,10)*g,10);if(o==='height'&&t.data.$element.parent().outerHeight()<d){d='auto'};s[o]=d}}};if(!t.data.settings.modal){s=n(s)};t.data.$element.dialog('option',s).trigger('dialogContentResize')};e(window).on({'dialog:aftercreate':function(t,n,i,o){var s=a(d,20),r={settings:o,$element:i};if(o.autoResize===!0||o.autoResize==='true'){i.dialog('option',{resizable:!1,draggable:!1}).dialog('widget').css('position','fixed');e(window).on('resize.dialogResize scroll.dialogResize',r,s).trigger('resize.dialogResize');e(document).on('drupalViewportOffsetChange.dialogResize',r,s)}},'dialog:beforeclose':function(t,i,o){e(window).off('.dialogResize');e(document).off('.dialogResize')}})})(jQuery,Drupal,drupalSettings,Drupal.debounce,Drupal.displace);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/misc/dialog/dialog.position.js. */