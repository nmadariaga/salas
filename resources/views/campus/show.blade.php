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
  <li class=""><a aria-expanded="false" href="/rolesusuarios" data-toggle="tab">Roles de usuarios</a></li>
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
          {!! Html::link(route('campus.edit', $campu->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
</p>
<h4>Información del campus "{{$campu->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($campu))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$campu->nombre}}</td>
            <tr>
              <td width=100><h5><b>Direccion:</b></h5></td>
              <td>{{$campu->direccion }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Latitud:</b></h5></td>
              <td>{{$campu->latitud}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Longitud:</b></h5></td>
              <td>{{$campu->longitud}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Descripcion:</b></h5></td>
              <td>{{$campu->descripcion}}</td>
          </tr>
          <tr>
            <td width=100><h5><b>Encargado:</b></h5></td>
          <td>{{$campu->rut_encargado}}</td>
          </tr>
          @else
          <p>
            No existe información de este Campus.
          </p>
          @endif
      </tbody>
  </table>
@stop
