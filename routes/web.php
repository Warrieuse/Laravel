<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//cet route fait si on met un / dans notre navigateur ce dernier execute la function et retourne la view sur la page welcome
// view fait référence au dossier VIEWS qui est dans RESSOURCES
Route::get('/', function () {
    return view('welcome');
    // je retourne la view de la page welcome dans le dossier views
    // si je return '<h1>coucou</h1>';  dans ce cas si il y a un / après le dans le navigateur
    // coucou seras affiché en h1
});
// je dirige ma view sur home.blade.php lorsque dans mon navigateur il y a /home.
Route::get('/home', 'PagesController@home');
// lorsque je clic sur le lien /apropos et bien la function apropos qui se trouve dans PagesController se met en route
Route::get('/apropos', 'PagesController@apropos');

Route::get('/services', 'PagesControllers@services');

Route::get('/show/{id}', 'PagesController@show');
