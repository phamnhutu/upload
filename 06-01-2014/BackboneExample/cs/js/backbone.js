/*var object = {};
Appointment = Backbone.Model.extend({
				initialize: function(){					
				}				
			});

_.extend(object, Backbone.Events);

object.on("alert1", show_alert );
object.trigger("alert1", "an event11111111111111111");
object.on("all", function(eventName) {
  //alert(eventName);
});

function show_alert(msg){
	 //alert("Triggered " + msg);
};
			var appointment = new Appointment();
			appointment.set('title', 'My knee hurts');
			AppointmentView = Backbone.View.extend({
				el: "body",
				render: function(){
					$(this.el).html('<li>' + this.model.get('title') + '</li>');
				}
			});
			appointmentView = new AppointmentView({model: appointment});
				var person = Backbone.Model.extend({
			  initialize: function(){					
			  },
			  defaults:{
				  names:[{'name':'tupn'},{'name':'thanh'}]
			  }
			});
			/*var person_view = Backbone.View.extend({
				initialize: function() {
					this.model = new person();
				},
				output: function(){
					console.log(this.model.get('names'))
				}
			});
			var obj = new person_view();
			obj.output();
			
			//appointmentView.render();
			//$('#app').html(appointmentView.el);
			*/
			