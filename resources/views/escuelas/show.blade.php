@extends('campus.plantillaAdmin')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
		<li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
		<li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
		<li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
		<li class=""><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
		<li class="active"><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
		<li class=""><a aria-expanded="false" href="/carreras" data-toggle="tab">Carreras</a></li>
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
	   <td width=505><h2>Registro de Escuelas</h2></td>
	    <td><a href="/departamentos" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('escuelas.edit', $escuela->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
</p>
<h4>Información de la escuela "{{$escuela->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($escuela))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$escuela->nombre}}</td>
            <tr>
              <td width=250><h5><b>Pertenece al departamento:</b></h5></td>
              <td>{{$escuela->departamento_id }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Descripcion:</b></h5></td>
              <td>{{$escuela->descripcion}}</td>
          </tr>
          @else
          <p>
            No existe información de esta Escuela.
          </p>
          @endif
      </tbody>
  </table>
@stop
