/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.tableselect.js. */
(function(e,t){'use strict';t.behaviors.webformTableSelect={attach:function(c){e(c).find('table.js-webform-tableselect').once('webform-tableselect').each(t.webformTableSelect)}};t.webformTableSelect=function(){var t=e(this);t.find('tr').each(function(){var t=e(this);if(t.find('input[type="checkbox"]:checked').length&&!t.hasClass('selected')){t.addClass('selected')}});if(t.find('th.select-all').length===0){t.find('td input[type="checkbox"]:enabled').on('click',function(){e(this).closest('tr').toggleClass('selected',this.checked)})};t.find('tr').on('click',function(t){if(e.inArray(t.target.tagName,['A','BUTTON','INPUT','SELECT'])!==-1){return!0};var n=e(this),c=n.find('td input[type="checkbox"]:enabled, td input[type="radio"]:enabled');if(c.length===0){return!0};c.trigger('click')})}})(jQuery,Drupal);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/modules/webform/js/webform.element.tableselect.js. */