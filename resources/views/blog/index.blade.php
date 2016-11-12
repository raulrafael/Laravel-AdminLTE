@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>CRUD index blade</h1>
	</div>
</div>
<div class="row">
	<table class="table table-striped"> 
<tr>
	<th>Correo</th>
	<th>Nombre</th>
	<th>Password</th>
</tr>

<a href="{{route('blog.create')}}" class="btn btn-info pull-right">Crear nuevo registro</a><br><br>

<?php $no=1;?>
@foreach($blogs as $blog)
	<tr>
		<td>{{$no++}}</td>
		<td>{{$blog->nombre}}</td>
		<td>{{$blog->correo}}</td>
		<form class="" action="{{route('bloge.destroy',$blog->id)}}" method="post">
			<input type="hidden" name="_method" value="delete">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Editar</a>
			<input type="submit" class="btn btn-danger" onclick="return confirm('Eliminar Registro');" name="name" value="delete">
		</form>
	</tr>
@endforeach
	</table>
</div>


@stop