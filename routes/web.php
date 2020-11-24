<?php
Route::get('/','LinkController@Mobile_Rnd');
Route::get('links_listar/{id}','LinkController@Listar_Links');
Route::get('mobiles_listar','LinkController@Listar_Mobiles');

Auth::routes();
Route::group(['middleware' => 'role:user'], function()
	{
		Route::get('home', 'HomeController@index')->name('home');
		Route::resource('links', 'LinkController');
		Route::resource('mobiles', 'MobileController', ['only' => ['show']]);
	});

Route::group(['middleware' => 'role:admin'], function()
	{
		Route::resource('mobiles', 'MobileController',['except'=>['show']]);
		
});


