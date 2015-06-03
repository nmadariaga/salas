extends('docentes.plantillaAdmin')
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
    <td width=505>
      <h2>Registro de Docentes</h2>
    </td>
    <td>
      <a href="/docentes/create" class="btn btn-warning btn-sm">Agregar Docente</a>
    </td>
  </table>
</p>
<h4>Listado de Docentes</h4>
<table class="table table-striped table-hover ">
  <tbody>
    @foreach($docentes as $docente)
    <tr>
      <td width=450>{{ $docente->nombre }}</td>
      <td>
        {!! Html::link(route('docentes.show', $docente->id), 'Detalles', array('class' => 'label label-info')) !!}
        {!! Html::link(route('docentes.edit', $docente->id), 'Editar', array('class' => 'label label-success')) !!}
        <td>
          {!! Form::open(array('route' => array('docentes.destroy', $docente->id), 'method' => 'DELETE')) !!}
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