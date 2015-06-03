@extends('tiposdesalas.plantillaAdmin')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
    <li class=""><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
    <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
    <li class=""><a aria-expanded="false" href="/salas" data-toggle="tab">Salas</a></li>
    <li class="active"><a aria-expanded="false" href="/tiposdesalas" data-toggle="tab">Tipos de Salas</a></li>
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
		<td width=505><h2>Registro de Tipos de Salas</h2></td>
		<td><a href="/salas" class="btn btn-default btn-sm">Volver</a>
		{!! Html::link(route('tiposdesalas.edit', $tiposdesala->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
	</table>
</p>
<h4>Información del tipo de sala "{{$tiposdesala->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($tiposdesala))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$tiposdesala->nombre}}</td>
            <tr>
              <td width=100><h5><b>Descripción:</b></h5></td>
              <td>{{$tiposdesala->descripcion}}</td>
            </tr>
          @else
          <p>
            No existe información de este tipo de Sala.
          </p>
          @endif
      </tbody>
  </table>
@stop
