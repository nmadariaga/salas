@extends('cursos.plantillaAdmin')
@section('contenido')
<p>
  <ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class="active"><a aria-expanded="false" href="/asignaturas" data-toggle="tab">Asignaturas</a></li>
    <li class=""><a aria-expanded="false" href="/cursos" data-toggle="tab">Cursos</a></li>
    <li class=""><a aria-expanded="false" href="/horarios" data-toggle="tab">Horarios</a></li>
    <li class=""><a aria-expanded="false" href="/periodos" data-toggle="tab">Periodos</a></li>
    <li class=""><a aria-expanded="false" href="/asignaturascursadas" data-toggle="tab">Asignaturas Cursadas</a></li>
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
		<td width=505><h2>Registro de Cursos</h2></td>
		<td><a href="/cursos" class="btn btn-default btn-sm">Volver</a>
		<a href="/cursos/create" class="btn btn-warning btn-sm">Agregar curso</a></td>
</table>
</p>
  <h4>Actualizar datos del curso "{{$curso->asignatura_id}}"</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
    	{!! Form::model($curso, ['route' => ['cursos.update', $curso->id], 'method' => 'patch']) !!}
			<div class="form-group">
				{!! Form::text('semestre', null, ['class' => 'form-control', 'placeholder'=>'Semestre al que pertenece']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('anio', null,['class'=>'form-control', 'placeholder'=>'Año academico'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('seccion', null,['class'=>'form-control', 'placeholder'=>'Seccion'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('asignatura_id', null,['class'=>'form-control', 'placeholder'=>'Asignatura'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('docente_id', null,['class'=>'form-control', 'placeholder'=>'Docente asignado al curso'])!!}
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