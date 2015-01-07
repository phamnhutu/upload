$(function() {

	//Khai bao Model Person
	var PersonModel = Backbone.Model.extend({
		urlRoot : 'api/students',
		defaults : {
			id : null,
			name : 'Updating...',
			age : 'Updating...',
			classname:'Updating',
			avatar : 'vendor/images/avatar_default.png'
		}
	});


	//Khai bao Collection Person
	var PersonCollection = Backbone.Collection.extend({
		model : PersonModel,
		url : 'api/',
	});


	//View cua tung Person
	var PersonView = Backbone.View.extend({
		tagName : 'article',

		className : 'profile pull-left',

		template : $('#tplOnePerson').html(),

		initialize : function() {
			this.render();
		},

		events : {
			'click .profile-remove' : 'remove',
			'click .edit-person' : 'edit',
			'click .btn-edit-cancel': 'cancel',
			'click .btn-edit-person' : 'save',
			'click .btn-view-detail' : 'detail',
			'click .btn-image-detail':'updateImage',
		},

		detail : function() {
			var that = this;
			new PersonDetailView({
				model : that.model.toJSON()
			});
		},
		
		updateImage : function() {
			//var that = this;
			//new PersonDetailView({
				//model : that.model.toJSON()
			//});
			alert('click');
		},
		
		save : function() {
			var model = this.model.toJSON();
			var name = $('.edit-name').val();
			var age  = $('.edit-age').val();
			var classname = $('.edit-classname').val();

			var person = new PersonModel({
				id : model.id
			});

			person.save({
				age : age,
				name : name,
				classname: classname,
			}, {
				success : function() {
					alert('Sua thanh cong');
				}
			});

			//Update new atribute of model
			this.model = person;
			

			return false;
		},

		cancel : function() {
			var that = this;
			var template = _.template(that.template, that.model.toJSON());
			that.$el.html(template);
			return false;
		},

		edit : function() {
			var that     = this;
			var template = _.template($('#edit-person').html(), that.model.toJSON());
			that.$el.html(template);
		},

		remove : function() {
			var that = this;
			that.$el.remove();
			var model = that.model.toJSON();
			var person = new PersonModel({
				id : model.id
			});
			person.destroy({
				success : function() {
					alert('Xoa thanh cong');
				}
			});
		},

		render : function() {
			var that     = this;
			var template = _.template(that.template, that.model.toJSON());
			$('.personView').append(that.$el.html(template));

			return this;
		}
	});


	//Master View
	var ListPersonView = Backbone.View.extend({

		el : $('#master'),

		initialize : function() {

			this.collection.on('add', this.colHandleAdd, this);

			this.collection.on('reset', function() {
				console.log('reset');
			});

			this.render();
		},

		colHandleAdd : function() {
			this.render();
		},

		events : {
			'click #add' : 'showAdd',
			'click .add-person' : 'add'
		},

		showAdd : function() {
			$('#form-add-person').slideToggle();
		},

		add : function() {
			var name   = $('#name').val();
			var age    = $('#age').val();
			var classname = $('#classname').val();
			if( name =="" || age == "" ){
				alert('Ban phai nhap du thong tin');
			}else{
				//Du lieu
				var data = {
					name : name,
					age : age,
					classname: classname,
				};

				//Luu vao database
				var person = new PersonModel();
				person.save(data);

				//Them vao collection
				this.collection.models.add(data);
				$('#form-add-person').slideToggle();
				document.getElementById('name').value = "";
				document.getElementById('age').value = "";
				return false;
			}			
		},

		render : function() {
			$('.personView').empty();
			var that = this;
			_.each(that.collection.models, function(person) {
				that.renderOne(person);
			});
		},

		renderOne : function(person) {
			new PersonView({
				model : person
			});
		}
	});


	var PersonDetailView = Backbone.View.extend({
		template : $('#tpl-modal-person-detail').html(),
		initialize : function() {
			this.render();
		},
		render : function() {
			var that = this;
			var template = _.template(that.template, that.model);
			$('#modal-detail').html(template);
			// $('#modal-person-detail').modal();
		}
	});


	var AppRouter = Backbone.Router.extend({
		routes : {
			'detail/:id' : 'detail',
		},
		detail : function(id) {
			var model = new PersonModel({
				id : id
			});

			model.fetch({
				success : function(respone) {
					new PersonDetailView({
						model : respone.toJSON()
					});
				}
			});
		}
	});


	//Khoi tao app
	var app = new PersonCollection();

	app.fetch({
		success : function(respone) {
			var list = new ListPersonView({
				collection : respone
			});
		}
	});

	var router = new AppRouter();

	Backbone.history.start();
});