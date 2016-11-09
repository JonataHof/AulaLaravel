<?php

Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');
//Route::resource('categories', 'CategoriesController',['only'=>['index','create']]); // escolher as rotas desejadas
//Route::resource('categories', 'CategoriesController',['except'=>['index','create']]); // excluir as rotas 
