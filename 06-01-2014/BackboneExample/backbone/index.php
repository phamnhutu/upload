<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backbone</title>
	<link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
	<link rel="stylesheet" href="vendor/css/bootstrap-glyphicons.css" />
	<link rel="stylesheet" href="vendor/css/style.css" />
</head>
<body>

<section class="container-fluid">
	<script type="text/template" id="tplOnePerson">
		<section class="profile-avatar">
			<a href="#"><img data-target="#modal-person-image-detail" data-toggle="modal" class="btn-image-detail" src="<%= avatar %>"></a>
		</section>
		<section class="profile-infomation">
			<p><i class="glyphicon glyphicon-user"></i> : <span class="inp-edit name"><%= name %></span></p>
			<p>Class : <span class="inp-edit name"><%= classname %></span></p>
			<p><i class="glyphicon glyphicon-arrow-up"></i> : <span class="inp-edit age"><%= age %></span></p>
			<p>
				<i class="profile-remove glyphicon glyphicon-remove"></i>
				<i class="glyphicon glyphicon-pencil edit-person"></i>
				<a href="#detail/<%= id%>" data-target="#modal-person-detail" data-toggle="modal" class="btn-view-detail"><i class="glyphicon glyphicon-eye-open view-person"></i></a>
			</p>
		</section>
		<div class="clearfix"></div>
	</script>

	<script type="text/template" id="tpl-modal-person-detail">
		<section id="modal-person-detail" class="modal fade">
			<section class="modal-dialog">
				<section class="modal-content">
					<section class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        			<h4 class="modal-title"><%= name%></h4>
					</section>
					<section class="modal-body">
						<img src="<%= avatar%>" class="pull-left">
						<div class="pull-left detail-right">
							<p>Class : <%= classname%></p>
							<p>Name : <%= name%></p>
							<p>Age : <%= age%></p>							
						</div>
						<div class="clearfix"></div>
					</section>
				</section>
			</section>
		</section>
	</script>
	
	<script type="text/template" id="tpl-modal-person-detail">
		<section id="modal-person-image-detail" class="modal fade">
			<section class="modal-dialog">
				<section class="modal-content">
					<section class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        			<h4 class="modal-title"><%= name%></h4>
					</section>
					<section class="modal-body">
						<img src="<%= avatar%>" class="pull-left">
						<div class="pull-left detail-right">
							<p>Class : <%= classname%></p>
							<p>Name : <%= name%></p>
							<p>Age : <%= age%></p>	
						</div>
						<div class="clearfix"></div>
					</section>
				</section>
			</section>
		</section>
	</script>

	<script type="text/template" id="edit-person">
		<form class="form">
			<div class="form-group">
					<label>Name</label>
					<input class="edit-name form-control" value="<%= name %>" />
			</div>
			<div class="form-group">
					<label>Class</label>
					<input class="edit-classname form-control" value="<%= classname %>" />
			</div>

			<div class="form-group">
				<label>Age</label>
				<input class="edit-age form-control" value="<%= age %>" />
			</div>

			<div class="form-group">
				<input type="hidden" name="edit-id" value="<%= id%>">
				<button class="btn-edit-person btn btn-small"><i class="glyphicon glyphicon-ok"></i></button>
				<button class="btn-edit-cancel btn btn-small"><i class="glyphicon glyphicon-remove"></i></button>
			</div>
		</form>
	</script>

	<section id="master" class="container-fluid">
		<!--Begin list-->
		<section id="list-person" class="pull-left">
			<section class="personView"></section>
		</section><!-- End list -->

		<!--Begin Action-->
		<section id="actions" class="pull-left">
			<h4>Add new</h4>
			<button id="add" class="btn btn-small"><i class="glyphicon glyphicon-plus"></i></button>
			<form class="form" id="form-add-person">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Class:</label>
					<input type="text" id="classname" class="form-control">
				</div>
				<div class="form-group">
					<label>Age:</label>
					<input type="text" id="age" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-medium add-person">Save</button>
				</div>
			</form>
		</section><!--End Action-->
		<section class="clearfix"></section>
		<section id="modal-detail"></section>
	</section>
</section>
<script src="vendor/js/jquery-2.0.1.min.js"></script>
<script src="vendor/js/underscore-min.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/backbone-min.js"></script>
<script src="vendor/app/app_2013_08_05.js"></script>
</body>
</html>