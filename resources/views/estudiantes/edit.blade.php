@extends('administrador.plantillaAdmin')
@section('contenido')
<ul class="nav nav-tabs">
  <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
  <li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
  <li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
  <li class=""><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
  <li class=""><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
  <li class=""><a aria-expanded="false" href="/carreras" data-toggle="tab">Carreras</a></li>
  <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
  <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
  <li class="active"><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
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
		<td width=505><h2>Registro de Estudiantes</h2></td>
		<td><a href="/estudiantes" class="btn btn-default btn-sm">Volver</a>
		<td><a href="/estudiantes/create" class="btn btn-warning btn-sm">Agregar Estudiante</a></td>
	</table>
</p>
<h4>Actualizar datos del Estudiantes "{{$estudiante->nombre}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($estudiante, ['route' => ['estudiantes.update', $estudiante->id], 'method' => 'patch']) !!}
        <div class="form-group">
          {!! Form::text('carrera_id', null, ['class' => 'form-control', 'placeholder'=>'Carrera']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('rut', null,['class'=>'form-control', 'placeholder'=>'RUT'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('apellidos', null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>'E-mail'])!!}
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
