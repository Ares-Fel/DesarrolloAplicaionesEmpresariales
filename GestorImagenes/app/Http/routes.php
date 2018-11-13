<?php
/*
Route::get('/', 'BienvenidaController@getIndex');
Route::get('validado', 'InicioController@getIndex');*/

Route::controllers([
	'validacion' => 'Validacion\ValidacionController',
	'validado/fotos' => 'FotoController',
	'validado/albumes' => 'AlbumController',
	'validado/usuario' => 'UsuarioController',
	'validado' => 'InicioController',
	'/' => 'BienvenidaController',
]);
