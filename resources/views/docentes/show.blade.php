@extends('docentes.plantillaAdmin')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class="active"><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
    <li class=""><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
    <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
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
		<td width=505><h2>Registro de Docentes</h2></td>
		<td><a href="/docentes" class="btn btn-default btn-sm">Volver</a>
		{!! Html::link(route('docentes.edit', $docente->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
	</table>
</p>
<h4>Información del Docente "{{$docente->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($docente))
            <tr height= 10>
              <td width=100>
                <h5><b>Departamento:</b></h5>
              </td>
              <td>{{$docente->departamento_id}}</td>
            <tr>
              <td width=100><h5><b>RUT:</b></h5></td>
              <td>{{$docente->rut}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Nombres:</b></h5></td>
              <td>{{$docente->nombres}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Apellidos:</b></h5></td>
              <td>{{$docente->apellidos}}</td>
            </tr>
          @else
          <p>
            No existe información de este Docente.
          </p>
          @endif
      </tbody>
  </table>
@stop
