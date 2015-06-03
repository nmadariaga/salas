@extends('funcionarios.plantillaAdmin')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
    <li class=""><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
    <li class="active"><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
    <li class=""><a aria-expanded="false" href="/salas" data-toggle="tab">Salas</a></li>
    <li class=""><a aria-expanded="false" href="/tiposdesalas" data-toggle="tab">Tipos de Salas</a></li>
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
		<td width=505><h2>Registro de Funcionarios</h2></td>
		<td><a href="/funcionarios" class="btn btn-default btn-sm">Volver</a>
		<td><a href="/funcionarios/create" class="btn btn-warning btn-sm">Agregar Funcionario</a></td>
	</table>
</p>
<h4>Actualizar datos del Funcionario "{{$funcionario->nombre}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($funcionario, ['route' => ['funcionarios.update', $funcionario->id], 'method' => 'patch']) !!}
      <div class="form-group">
        {!! Form::text('departamento_id', null, ['class' => 'form-control', 'placeholder'=>'Departamento']) !!}
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
        {!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
      </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
@stop