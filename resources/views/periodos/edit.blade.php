@extends('periodos.plantillaAdmin')
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
		<td width=505><h2>Registro de periodos</h2></td>
		<td><a href="/periodos" class="btn btn-default btn-sm">Volver</a>
		<a href="/periodos/create" class="btn btn-warning btn-sm">Agregar periodo</a></td>
</table>
</p>
  <h4>Actualizar periodo "{{$periodo->bloque}}"</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
    	{!! Form::model($periodo, ['route' => ['periodos.update', $periodo->id], 'method' => 'patch']) !!}
			<div class="form-group">
				{!! Form::text('bloque', null, ['class' => 'form-control', 'placeholder'=>'Bloque']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('inicio', null,['class'=>'form-control', 'placeholder'=>'Hora de inicio'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('fin', null,['class'=>'form-control', 'placeholder'=>'Hora de fin'])!!}
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
