/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/imce/js/plugins/ckeditor/imce.ckeditor.js. */
(function(i,n,e){'use strict';if(!e.imce){e.plugins.add('imce',{init:function(i,n){i.addCommand('imceimage',{exec:e.imce.imageDialog});i.ui.addButton('ImceImage',{label:e.imce.imageLabel(),command:'imceimage',icon:i.config.ImceImageIcon});i.addCommand('imcelink',{exec:e.imce.linkDialog});i.ui.addButton('ImceLink',{label:e.imce.linkLabel(),command:'imcelink',icon:i.config.ImceLinkIcon})}})};e.imce=e.imce||{imageLabel:function(){return n.t('Insert images using Imce File Manager')},imageDialog:function(i){return e.imce.openDialog(i,'image')},linkLabel:function(){return n.t('Insert file links using Imce File Manager')},linkDialog:function(i){return e.imce.openDialog(i,'link')},openDialog:function(i,n){var t=Math.min(1000,parseInt(screen.availWidth*0.8)),a=Math.min(800,parseInt(screen.availHeight*0.8)),c=e.imce.url('sendto=CKEDITOR.imce.sendto&type='+n+'&ck_id='+encodeURIComponent(i.name));i.popup(c,t,a)},sendto:function(i,n){var t=n.imce,c=e.instances[t.getQuery('ck_id')];if(!c){n.close();return};var a=t.getSelection(),m=t.getQuery('type')==='image',o=function(){var l,r,o=[];for(l in a){if(!t.owns(a,l)){continue};i=a[l];if(m&&i.isImageSource()){o.push('<img src="'+i.getUrl()+'"'+(i.width?' width="'+i.width+'"':'')+(i.height?' height="'+i.height+'"':'')+' data-entity-type="file" data-entity-uuid="'+(i.uuid||'')+'" alt="" />')}
else{r=!o.length&&e.imce.getSelectedHtml(c)||i.formatName();o.push('<a href="'+i.getUrl()+'">'+r+'</a>')}};c.insertHtml(o.join('<br />'));n.close()};if(m){t.loadItemUuids(a,o)}
else{o()}},url:function(e){var i=n.url('imce');if(e){i+=(i.indexOf('?')===-1?'?':'&')+e};return i},getSelectedHtml:function(e){var n='';try{var t=e.getSelection().getRanges()[0],i=e.document.createElement('div');i.append(t.cloneContents());n=i.getHtml()}catch(a){};return n}}})(jQuery,Drupal,CKEDITOR);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/imce/js/plugins/ckeditor/imce.ckeditor.js. */