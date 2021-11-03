/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/advagg/advagg_validator/js/csslint_form.js. */
(function(a){'use strict';Drupal.behaviors.advagg_validator_css_simple={attach:function(r,e){a('.advagg_validator_css',r).click(function(r){var s=a(this).siblings('.results');a(s).html('');a.each(a(this).siblings('.filenames'),function(){var r=a(this).val();if(r){advagg_validator_css(a,s,r,e)}});return!1})}}}(jQuery));(function(a){'use strict';Drupal.behaviors.advagg_validator_css_recursive={attach:function(r,e){a('.advagg_validator_recursive_css',r).click(function(r){var s=a(this).siblings('.results');a(s).html('');a.each(a(this).parent().find('.filenames'),function(){var r=a(this).val();if(r){advagg_validator_css(a,s,r,e)}});return!1})}}}(jQuery));function advagg_validator_css(a,r,e,s){'use strict';try{var i=new Date().getTime();jQuery.ajax({url:s.path.baseUrl+e+'?t='+i,dataType:'text',async:!1,success:function(i){var u=CSSLint.verify(i,s.csslint.rules),l=u.messages;a(r).append('<p><h4>'+e+'</h4><ul>');if(!l.length){a(r).append('<li>No errors</li>')};for(var t=0,c=l.length;t<c;t++){var n=l[t].message+' (line '+l[t].line+', col '+l[t].col+', rule '+l[t].rule.id+')';a(r).append('<li class="'+l[t].type+'">'+n.replace(/ /g,'&nbsp;')+'</li>')};a(r).append('</ul></p>')},error:function(s,i,t){a(r).append('<p><h4>'+e+'</h4><ul>');a(r).append('<li class="error">'+Drupal.t('Browser unable to read file. @error',{'@error':t})+'</li>');a(r).append('</ul></p>')}})}catch(t){a(r).append(t)}};
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/advagg/advagg_validator/js/csslint_form.js. */