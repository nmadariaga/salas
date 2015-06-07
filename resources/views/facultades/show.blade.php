@extends('campus.plantillaAdmin')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
		<li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
		<li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
		<li class="active"><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
		<li class=""><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
		<li class=""><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
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
	   <td width=505><h2>Registro de Facultades</h2></td>
	    <td><a href="/facultades" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('facultades.edit', $facultad->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
</p>
<h4>Información de la Facultad "{{$facultad->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($facultad))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$facultad->nombre}}</td>
            <tr>
              <td width=200><h5><b>Pertenece al campus:</b></h5></td>
              <td>{{$campus->nombre }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Descripcion:</b></h5></td>
              <td>{{$facultad->descripcion}}</td>
          </tr>
          @else
          <p>
            No existe información de esta Facultad.
          </p>
          @endif
      </tbody>
  </table>
@stop
