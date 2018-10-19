@extends('layout.layout')

@section('title')
    Lista de usuarios
@endsection



@section('content')
<div class="container">
	<h1> Todos los usuarios </h1>
	<div class="text-center">
		<a href="users/create" class="btn btn-info"> Crear usuario </a>	
	</div>	
	<br>

	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Type user</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<th scope="row"> {{ $user->id }} </th>
					<td> {{ $user->name }} </td>
					<td> {{ $user->email }} </td>
					<td> {{ $user->type }} </td>
					<td>
						{{ Form::open(['route' =>  array('users.destroy', $user->id), 'method'=> 'DELETE', 'onclick' => 'return confirm("Seguro que quieres borrar este usuario?")']) }}
							<a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn btn-primary"> Editar </a>

							{{ Form::submit('Eliminar', ['class'=>'btn btn-danger']) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	
	{{ $users->links('vendor.pagination.pagination') }}
	
		
</div>


@endsection