@extends('layouts.dashboard')

@section('menuLateral')

	<li class="active"><a href="general">General</a></li>
	<li><a href="room">Room</a></li>
	<li><a href="solicitudes">Solicitudes</a></li>
	<li><a href="estadisticas">Estadísticas</a></li>

@stop
@section('contenido')
<h1 class="page-header">General</h1>
<p>Esta es la página general, se verá un resumen de estadísticas y otras informaciones</p>
@stop