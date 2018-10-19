@extends('layout.layout')

@section('title')
    Crear usuario
@endsection



@section('content')
	<h1> Crear usuario </h1>


	{{ Form::open(['route' => 'users.store', 'method' => 'POST']) }}
		<div class="form-group">
			{{ Form::label('name', 'Nombre') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Introduce tu nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Introduce tu correo electrónico']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '**********']) }}
		</div>

		<div class="form-group">
			{{ Form::label('type', 'Tipo de usuario') }}
			{{ Form::select('type', ['' => 'Selecciona el tipo de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], '', ['class' => 'form-control', 'required']) }}
		</div>


		<div class="form-group">
			{{ Form::submit('Registrar usuario', ['class'=>'btn btn-primary']) }}
		</div>


	{{ Form::close() }}

@endsection