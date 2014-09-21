@extends('layouts.dashboard')

@section('menuLateral')

	<li><a href="general">General</a></li>
  <li class="active"><a href="room">Room</a></li>
  <li><a href="solicitudes">Solicitudes</a></li>
  <li><a href="estadisticas">Estadísticas</a></li>

@stop
@section('contenido')
<h1 class="page-header">Room</h1>
<p>Aquí se podrá impartir la atención por videochat</p>

@stop