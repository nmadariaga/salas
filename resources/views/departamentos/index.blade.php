@extends('campus.plantillaAdmin')
@section('contenido')
<p>
  <ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
    <li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
    <li class="active"><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
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
    <td width=505>
      <h2>Registro de Departamentos</h2>
    </td>
    <td>
      <a href="/departamentos/create" class="btn btn-warning btn-sm">Agregar Departamentos</a>
    </td>
  </table>
</p>
<h4>Listado de Departamentos</h4>
<table class="table table-striped table-hover ">
  <tbody>
    @foreach($departamentos as $departamento)
    <tr>
      <td width=450>{{ $departamento->nombre }}</td>
      <td>
        {!! Html::link(route('departamentos.show', $departamento->id), 'Detalles', array('class' => 'label label-info')) !!}
        {!! Html::link(route('departamentos.edit', $departamento->id), 'Editar', array('class' => 'label label-success')) !!}
        <td>
          {!! Form::open(array('route' => array('departamentos.destroy', $departamento->id), 'method' => 'DELETE')) !!}
            <button class="label label-danger">Eliminar</button>
          {!! Form::close() !!}
        </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<p>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</p>
<table>
  <td width= 505><a href="/admin/menu" class="btn btn-danger btn-xs">Cerrar</a></td>
    <div class="col-md-12">
</table>
@stop
