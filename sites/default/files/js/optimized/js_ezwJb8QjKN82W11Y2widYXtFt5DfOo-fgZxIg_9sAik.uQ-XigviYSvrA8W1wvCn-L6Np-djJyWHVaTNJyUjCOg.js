/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/misc/announce.js. */
(function(e,n){var t=void 0,i=[];e.behaviors.drupalAnnounce={attach:function(e){if(!t){t=document.createElement('div');t.id='drupal-live-announce';t.className='visually-hidden';t.setAttribute('aria-live','polite');t.setAttribute('aria-busy','false');document.body.appendChild(t)}}};function r(){var e=[],a='polite',n=void 0,u=i.length;for(var r=0;r<u;r++){n=i.pop();e.unshift(n.text);if(n.priority==='assertive'){a='assertive'}};if(e.length){t.innerHTML='';t.setAttribute('aria-busy','true');t.setAttribute('aria-live',a);t.innerHTML=e.join('\n');t.setAttribute('aria-busy','false')}};e.announce=function(t,e){i.push({text:t,priority:e});return n(r,200)()}})(Drupal,Drupal.debounce);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/misc/announce.js. */