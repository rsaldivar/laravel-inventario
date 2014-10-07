<!-- app/views/users/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users') }}">user Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All users</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create User</a>
	</ul>
</nav>

<h1>Edit {{ $user->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Username') }}
		{{ Form::text('username', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('password confirm', 'Password confirm') }}
		{{ Form::password('password_confirm', null, array('class' => 'form-control')) }}
	</div>


	<div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('active' => 'active' , 'inactive' => 'inactive'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
