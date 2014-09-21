<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// intefaz de asesor en orden

Route::get('ingresar',function()
{
	return View::make('layouts.ingresar');
});


Route::get('general',function()
{
	return View::make('asesor.general');
});

Route::get('room',function()
{
	return View::make('asesor.room');
});

Route::get('solicitudes',function()
{
	return View::make('asesor.solicitudes');
});

Route::get('estadisticas',function()
{
	return View::make('asesor.estadisticas');
});

Route::get('estadisticas',function()
{
	return View::make('asesor.estadisticas');
});


// interfaz del interesado

Route::get('interesado',function()
{
	return View::make('layouts.interesado');
});