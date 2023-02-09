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

//las rutas son en orden de ejecucion!°°!!!!!!!!!!!!!!!

Route::get('/', function () {
   // return view('welcome');
   return "Pag ronucjásdsa";
});

Route::get('cursos', function () {
   // return view('welcome');
   return "Cursos";
});

Route::get('cursos/create', function () {//enviar variables por laravel
   // return view('welcome');
   return "Bienvenido para crear curso";
});
Route::get('cursos/{curso}', function ($curso) {//enviar variables por laravel
   // return view('welcome');
   return "Bienvenido al curso $curso";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {//enviar variables por laravel 
   // return view('welcome');
   return $categoria ? "Bienvenido al curso $curso, categoria $categoria" :  "Bienvenido al curso $curso";
});


