<html>
	<title>Webstite</title>
	<head></head>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/json2.js"></script>
	<script src="js/underscore.js"></script>
	<script src="js/backbone-min.js"></script>
	<!--<script src="js/backbone.js"></script>	-->
	<script src="js/handlebars-v2.0.0.js"></script>	
	<body>
			
			<div id="body">
				<form method="post">
				Ho ten: <input type="text" name="name" id="username"/>
					<button type="submit">Luu</button>
				</form>				
			</div>
			<script>					
				var TodoItem = Backbone.Model.extend({	
					urlRoot : 'process.php',
					initialize: function(){					
					},
					defaults : {
						name : 'Updateing.........',
						status : 'complete',	
					},					
					toggleStatus:function(){						
						if(this.get('status') == 'incomplete'){
							this.set({'status': 'complete'});							
						}else{
							this.set({'status': 'incomplete'});							
						}
					},
				});				
				var todoItem = new TodoItem();				
							
				var TodoView = Backbone.View.extend({	
					className:'item',
					template: _.template('<h3>'+'<input type="checkbox" '+'<% if( status =="complete" ) print("checked")%>/>'+'<%= name %></h3><span class="edit">Edit</span> <span class="del">Xoa</span>'),					
					initialize: function () {
						_.bindAll(this, 'render');
						this.render();
					},
					events:{
						'click h3':'alertStatus',
						'change input': 'toggleStatus',
						'click span.edit':'recordEdit',
						'click span.del':'recordDel',						
					},	
					
					recordEdit:function(){
						console.log( this.model.toJSON() );
					},
					recordDel:function(){						
						console.log( this.model.toJSON() );
						this.$el.remove();
						var todoItem = new TodoItem({
							id : this.model.id
						});
						todoItem.destroy({
							success : function() {
								alert('Xoa thanh cong');
							}
						});
					},
					toggleStatus:function(){
						this.model.toggleStatus();						
					},
					alertStatus:function(){
						console.log('You are click h3!');
					},
					render: function(){					
						this.$el.html( this.template( this.model.toJSON() ) );	
						return this;
						$('input[type=checkbox]').css({'color':'#ff0000'});
					},					
				});					
				
				var TodoListView = Backbone.View.extend({					
					el:$('body'),					
					className: 'todolist',					
					initialize: function () {
						_.bindAll(this, 'addPanel','render');											
						this.collection.on( 'add', this.colHandleAdd, this );						
						this.collection.on('reset', function() {
							console.log('reset');
						});
						this.render();	
					},
					events:{
						'submit form':'createRecord',
					},
					createRecord:function(e){
						e.preventDefault();												
						var username = $("#username").val();
						if( username !="" ){
								var data = {
								id:0,
								name : username,
								status : 'incomplete',							
							};						
							todoItem = new TodoItem();
							todoItem.save(name);
							todoItem = new TodoItem();
							this.collection.add( todoItem );							
						}						
					},
					colHandleAdd : function() {
						this.render();
					},
					render: function(){	
						$('.item').remove();
						this.collection.forEach(this.addPanel, this);
					},
					addPanel : function(todoItem) {										
						var todoView = new TodoView({model: todoItem});
						this.$el.append( todoView.render().el );						
					}
				});
				
				var TodoList = Backbone.Collection.extend({
					model: TodoItem,	
					url:'process.php',
				});				
				var todoList = new TodoList();
				todoList.fetch({
					success: function(collection, respons){						
						todoList.reset(respons);
						var todoListView = new TodoListView({collection: todoList});
					},
					error: function(){}
				});					
			</script>		
	</body>
</html>