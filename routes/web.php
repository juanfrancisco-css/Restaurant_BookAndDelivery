<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


///////////////////////////////   test  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/test', function () {
    return view('test.test_calendario');
})->name('test-calendar');

Route::get('/', function () {
    return view('welcome');
});


///////////////////////////////   pagina de inicio \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/book&delivery', function () {
    return view('index');
})->name('inicio');


///////////////////////////////   pagina del menu \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/menu', function () {
    return view('menu');
})->name('menu');


///////////////////////////////   pagina de la reserva \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/reserva', function () {
    return view('book');
})->name('book');


///////////////////////////////   pagina del aboutUs \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/Sobre Nosotros', function () {
    return view('about');
})->name('about');



///////////////////////////////   Perfil de Usuario  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('/Perfil', function (){
    return view('users.infoContacto');
})->name('perfil-contacto');

Route::get('/Direccion', function (){
    return view('users.infoDireccion');
})->name('perfil-direccion');




