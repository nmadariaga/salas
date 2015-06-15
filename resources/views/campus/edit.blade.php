@extends('administrador.plantillaAdmin')
@section('contenido')
<ul class="nav nav-tabs">
  <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
  <li class="active"><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
  <li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
  <li class=""><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
  <li class=""><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
  <li class=""><a aria-expanded="false" href="/carreras" data-toggle="tab">Carreras</a></li>
  <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
  <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
  <li class=""><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
  <li class=""><a aria-expanded="false" href="/roles" data-toggle="tab">Roles</a></li>
		<li class="dropdown">
			<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">Opciones <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#dropdown1" data-toggle="tab">Action</a></li>
				<li class="divider"></li>
				<li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
			</ul>
		</li>
	</ul>
	<table>
		<td width=505><h2>Registro de Campus</h2></td>
		<td><a href="/campus" class="btn btn-default btn-sm">Volver</a>
		<a href="/campus/create" class="btn btn-warning btn-sm">Agregar Campus</a></td>
</table>
</p>
  <h4>Actualizar datos del campus "{{$campu->nombre}}"</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
    	{!! Form::model($campu, ['route' => ['campus.update', $campu->id], 'method' => 'patch']) !!}
			<div class="form-group">
				{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre del Campus']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('direccion', null,['class'=>'form-control', 'placeholder'=>'Direccion'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('latitud', null,['class'=>'form-control', 'placeholder'=>'Latitud'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('longitud', null,['class'=>'form-control', 'placeholder'=>'Longitud'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('rut_encargado', null,['class'=>'form-control', 'placeholder'=>'Rut encargado'])!!}
			</div>
			<div class="form-group">
				{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
			</div>
			{!! Form::close() !!}
     	<p>
	    	@if(Session::has('message'))
        	<div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
@stop
