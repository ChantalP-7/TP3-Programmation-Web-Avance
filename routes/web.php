<?php
use App\Routes\Route;
use App\Controllers\HomeController;
use App\Controllers\MemberController;
use App\Controllers\RecipeController;
use App\Controllers\CategorieController;
use App\Controllers\CommentController;
use App\Controllers\UserIndexController; 
use App\Controllers\UserController; 
use App\Controllers\AuthController; 

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home/index', 'HomeController@index');

// route pour les utilisateurs

Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/users', 'UserIndexController@index');



// route pour les membres 

Route::get('/members', 'MemberController@index');
Route::get('/member/show', 'MemberController@show');
Route::get('/member/create', 'MemberController@create');
Route::post('/member/create', 'MemberController@store');
Route::get('/member/edit', 'MemberController@edit');
Route::post('/member/edit', 'MemberController@update');
Route::post('/member/delete', 'MemberController@delete');


// Route pour les recettes

Route::get('/recipes', 'RecipeController@index');
Route::get('/recipe/show', 'RecipeController@show');
Route::get('/recipe/create', 'RecipeController@create');
Route::post('/recipe/create', 'RecipeController@store');
Route::get('/recipe/edit', 'RecipeController@edit');
Route::post('/recipe/edit', 'RecipeController@update');
Route::post('/recipe/delete', 'RecipeController@delete');

// Route pour les catégories

Route::get('/categories', 'CategorieController@index');
Route::get('/categorie/show', 'CategorieController@show');

// Route pour les commentaires

Route::get('/comments', 'CommentController@index');
Route::get('/comment/show', 'CommentController@show');
Route::get('/comment/create', 'CommentController@create');
Route::post('/comment/create', 'CommentController@store');
Route::get('/comment/edit', 'CommentController@edit');
Route::post('/comment/edit', 'CommentController@update');
Route::post('/comment/delete', 'CommentController@delete');

// Route pour l'authentification

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');


Route::dispatch();