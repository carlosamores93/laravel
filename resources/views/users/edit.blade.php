@extends('layout.layout')

@section('title')
    Editar usuario
@endsection



@section('content')
	<h1> Editar usuario </h1>

	{{ Form::open(['route' =>  array('users.update', $user->id), 'method' => 'PATCH']) }}
{{--
	{{ Form::open(['action' => array('UsersController@update', $user->id), 'method' => 'PATCH']) }}
--}}
		<div class="form-group">
			{{ Form::label('name', 'Nombre') }}
			{{ Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Introduce tu nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'Introduce tu correo electrónico']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Rellene solo si quiere actualizar su contraseña']) }}
		</div>

		<div class="form-group">
			{{ Form::label('type', 'Tipo de usuario') }}
			{{ Form::select('type', ['' => 'Selecciona el tipo de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control', 'required']) }}
		</div>


		<div class="form-group text-center">
			<a href="{{ route('users.index') }}" class="btn btn-info">Volver</a>
			{{ Form::submit('Actualizar usuario', ['class'=>'btn btn-primary']) }}	
		</div>


	{{ Form::close() }}

@endsection