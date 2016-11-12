<?php

Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){

	Route::get('/','ProductsController@index');
	Route::resource('products', 'ProductsController');
	Route::resource('categories', 'CategoriesController');
});


Route::controllers([
	'auth'=>'Auth\AuthController'
	]);

Route::get('/',function(){
	return "Home Page";

});


//Route::resource('categories', 'CategoriesController',['only'=>['index','create']]); // escolher as rotas desejadas
//Route::resource('categories', 'CategoriesController',['except'=>['index','create']]); // excluir as rotas 
