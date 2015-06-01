@extends('administrador.plantillaAdmin')
@section('contenido')
<ul class="nav nav-tabs">
  <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
  <li class="active"><a aria-expanded="false" href="/admin/campus" data-toggle="tab">Campus</a></li>
  <li class=""><a aria-expanded="false" href="/admin/usuarios" data-toggle="tab">Usuarios</a></li>
  <li class="dropdown">
    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">Opciones <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
  </li>
</ul>

@endsection
