/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/module_filter/js/module_filter.update_status.js. */
(function(t,e){'use strict';e.ModuleFilter=e.ModuleFilter||{};e.behaviors.moduleFilterUpdateStatus={attach:function(i,o){var r=t('input.table-filter-text').once('module-filter');if(r.length){var n='tbody tr',s=r.attr('data-table'),a=t(s),u=t('.table-filter input[name="show"]',a),l=e.ModuleFilter.localStorage.getItem('updateStatus.show')||'all';r.winnow(s+' '+n,{textSelector:'td .project-update__title a',emptyMessage:e.t('No results'),clearLabel:e.t('clear'),wrapper:a,buildIndex:[function(e){if(e.element.is('.color-success')){e.state='ok'}
else if(e.element.is('.color-warning')){e.state='warning'}
else if(e.element.is('.color-error')){e.state='error'};return e}],rules:[function(e){switch(l){case'all':return!0;case'updates':if(e.state=='warning'||e.state=='error'){return!0};break;case'ignore':if(e.state=='ignored'){return!0};break};return!1}]}).focus();e.ModuleFilter.winnow=r.data('winnow');var c=t('h3',a);r.bind('winnow:finish',function(){c.each(function(e,r){var i=t(r),a=i.next();if(a.is('table')){var l=a.find(n+':visible');i.toggle(l.length>0)}});e.announce(e.formatPlural(a.find(n+':visible').length,'1 project is available in the modified list.','@count projects are available in the modified list.'))});u.change(function(){l=t(this).val();e.ModuleFilter.localStorage.setItem('updateStatus.show',l);e.ModuleFilter.winnow.filter()});u.filter('[value="'+l+'"]').prop('checked',!0).trigger('change')}}}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/module_filter/js/module_filter.update_status.js. */