/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/core/modules/contextual/js/views/AuralView.js. */
(function(t,i){t.contextual.AuralView=i.View.extend({initialize:function(t){this.options=t;this.listenTo(this.model,'change',this.render);this.render()},render:function(){var i=this.model.get('isOpen');this.$el.find('.contextual-links').prop('hidden',!i);this.$el.find('.trigger').text(t.t('@action @title configuration options',{'@action':!i?this.options.strings.open:this.options.strings.close,'@title':this.model.get('title')})).attr('aria-pressed',i)}})})(Drupal,Backbone);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/core/modules/contextual/js/views/AuralView.js. */