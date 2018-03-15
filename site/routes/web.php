<?php


Route::get('/', 'HomeController@index');
Route::get('/institucional', 'SobreController@index');
Route::get('/download', 'DownloadController@index');
Route::get('/associativo', 'AssociativoController@index');
Route::get('/rede', 'RedeController@index');
Route::get('/noticias', 'NoticiasEventosController@noticias');
Route::get('/single', 'NoticiasEventosController@single');
Route::get('/eventos', 'NoticiasEventosController@eventos');
Route::get('/evento', 'NoticiasEventosController@evento');
