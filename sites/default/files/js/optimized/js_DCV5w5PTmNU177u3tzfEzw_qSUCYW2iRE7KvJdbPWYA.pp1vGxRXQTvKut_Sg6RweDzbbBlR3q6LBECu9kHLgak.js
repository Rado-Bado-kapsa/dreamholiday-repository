/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/imce/js/plugins/imce/imce.resize.js. */
(function(t,i,e){'use strict';e.bind('init',e.resizeInit=function(){if(e.hasPermission('resize_images')){e.addTbb('resize',{title:i.t('Resize'),permission:'resize_images',content:e.createResizeForm(),shortcut:'Ctrl+Alt+R',icon:'image'})}});e.createResizeForm=function(){var s=e.resizeForm;if(!s){s=e.resizeForm=e.createEl('<form class="imce-resize-form"><div class="imce-form-item imce-resize-dimensions"><input type="number" name="width" class="imce-resize-width-input" min="1" step="1" /><span class="imce-resize-separator">x</span><input type="number" name="height" class="imce-resize-height-input" min="1" step="1" /></div><div class="imce-form-item imce-resize-copy"><label><input type="checkbox" name="copy" class="imce-resize-copy-input" />'+i.t('Create a copy')+'</label></div><div class="imce-form-actions"><button type="submit" name="op" class="imce-resize-button">'+i.t('Resize')+'</button></div></form>');s.onsubmit=e.eResizeSubmit;var t=s.elements;t.width.max=e.getConf('maxwidth')||10000;t.height.max=e.getConf('maxheight')||10000;t.width.placeholder=i.t('Width');t.height.placeholder=i.t('Height');t.width.onfocus=t.height.onfocus=e.eResizeInputFocus};return s};e.eResizeSubmit=function(){var t,i=this.elements,s=parseInt(i.width.value*1),a=parseInt(i.height.value*1),n=i.copy.checked?1:0,r=e.getSelection();if(e.validateResize(r,s,a,n)){t={width:s,height:a,copy:n};e.ajaxItems('resize',r,{data:t});e.getTbb('resize').closePopup()};return!1};e.validateResize=function(i,t,s,a){return e.activeFolder.isReady()&&e.validateCount(i)&&e.validateImageTypes(i)&&e.validateDimensions(i,t,s)&&e.validatePermissions(i,'resize_images')};e.eResizeInputFocus=function(){var i=this,t=i.value;setTimeout(function(){if(i===document.activeElement&&t===i.value){var a,r=i.form.elements,m=r.width===i,n=r[m?'height':'width'].value*1,s=e.previewingItem;if(s&&s.width&&n){a=s.width/s.height;i.value=Math.round(m?n*a:n/a)};i=null}})}})(jQuery,Drupal,imce);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/imce/js/plugins/imce/imce.resize.js. */