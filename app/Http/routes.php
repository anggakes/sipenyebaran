<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProyekController@indexHome');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('admin','ProyekController@admin');
Route::get('laporan','ProyekController@adminLaporan');

Route::get('kecamatankordinat/{id}','ProyekController@getKordinat');
Route::get('tahunproyek/{tahun}','ProyekController@getTahun');
Route::get('kecamatanproyek/{kecamatan}','ProyekController@getKecam');
Route::get(
	'proyek/datatables',
	['as'=>'proyek.datatables',
	'uses'=>'ProyekController@datatables']);
Route::resource('proyek', 'ProyekController');

Route::get(
	'kontraktor/datatables',
	['as'=>'kontraktor.datatables',
	'uses'=>'KontraktorController@datatables']);
Route::resource('kontraktor', 'KontraktorController');

Route::get('test', function(){
	return view('test.teskecamatan');
});