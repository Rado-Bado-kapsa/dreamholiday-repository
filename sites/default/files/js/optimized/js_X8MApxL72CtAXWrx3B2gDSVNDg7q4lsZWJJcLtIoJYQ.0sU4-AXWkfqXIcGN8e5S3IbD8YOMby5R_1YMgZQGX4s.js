/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/contextual/js/models/StateModel.js. */
(function(t,s){t.contextual.StateModel=s.Model.extend({defaults:{title:'',regionIsHovered:!1,hasFocus:!1,isOpen:!1,isLocked:!1},toggleOpen:function(){var t=!this.get('isOpen');this.set('isOpen',t);if(t){this.focus()};return this},close:function(){this.set('isOpen',!1);return this},focus:function(){this.set('hasFocus',!0);var t=this.cid;this.collection.each(function(s){if(s.cid!==t){s.close().blur()}});return this},blur:function(){if(!this.get('isOpen')){this.set('hasFocus',!1)};return this}})})(Drupal,Backbone);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/contextual/js/models/StateModel.js. */