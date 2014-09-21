@extends('layouts.dashboard')

@section('menuLateral')

	<li><a href="general">General</a></li>
  <li><a href="room">Room</a></li>
  <li><a href="solicitudes">Solicitudes</a></li>
  <li class="active"><a href="estadisticas">Estadísticas</a></li>

@stop
@section('contenido')
<h1 class="page-header">Estadísticas</h1>
<p>Aquí se podrán ver las estadísticas de las atenciones realizadas</p>
@stop