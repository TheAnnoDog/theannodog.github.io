(function(i,t){i.contextual.KeyboardView=t.View.extend({events:{'focus .trigger':'focus','focus .contextual-links a':'focus','blur .trigger':function(){this.model.blur()},'blur .contextual-links a':function(){var i=this;this.timer=window.setTimeout(function(){i.model.close().blur()},150)}},initialize:function(){this.timer=NaN},focus:function(){window.clearTimeout(this.timer);this.model.focus()}})})(Drupal,Backbone);