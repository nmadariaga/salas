@extends('administrador.plantillaAdmin')
@section('contenido')
<ul class="nav nav-tabs">
  <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
  <li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
  <li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
  <li class=""><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
  <li class=""><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
  <li class="active"><a aria-expanded="false" href="/carreras" data-toggle="tab">Carreras</a></li>
  <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
  <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
  <li class=""><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>		<li class="dropdown">
			<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">Opciones <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#dropdown1" data-toggle="tab">Action</a></li>
				<li class="divider"></li>
				<li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
			</ul>
		</li>
	</ul>
	<table>
	   <td width=505><h2>Registro de Carreras</h2></td>
	    <td><a href="/carreras" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('carreras.edit', $carrera->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
</p>
<h4>Información de la carrera "{{$carrera->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($carrera))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>carrera
              <td>{{$carrera->nombre}}</td>
            <tr>
              <td width=250><h5><b>Pertenece a la escuela:</b></h5></td>
              <td>{{$escuela->nombre }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Descripcion:</b></h5></td>
              <td>{{$carrera->descripcion}}</td>
          </tr>
					<tr>
						<td width=100><h5><b>Codigo carrera:</b></h5></td>
						<td>{{$carrera->codigo }}</td>
					</tr>
          @else
          <p>
            No existe información de esta Carrera.
          </p>
          @endif
      </tbody>
  </table>
@stop
