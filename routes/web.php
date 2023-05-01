<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController; //importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\LoginController; //importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\HomeController;//importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\LogoutController; //importamos la libreria para poder utilizar la clase 

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


///////////////////////////////   test(Pruebas)  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
Route::get('/test', function () {
    return view('test.test_calendario');
})->name('test-calendar');

Route::get('/', function () {
    return view('welcome');
});


///////////////////////////////   Formulario de Registro \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
/*Route::get('/Registrarse', function () {
    return view('auth.registro');
})->name('registro');*/

Route::get('/Registrarse',[RegisterController::class,'show'])->name('registrarse');   //visualizar
Route::post('/Registrarse',[RegisterController::class,'register'])->name('registrarse'); //introducir 


///////////////////////////////   Formulario de  login \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
/*Route::get('/Iniciar Sesion', function () {
    return view('auth.login');
})->name('login');*/
Route::get('/iniciar sesion',[LoginController::class,'show'])->name('login'); //visuaizar
Route::post('/iniciar sesion',[LoginController::class,'login'])->name('login'); //introducir 


//////////////////////////  Destruir la sesion \\\\\\\\\\\\\\\\\

Route::get('/Adios',[ LogoutController::class,'logout'])->name('logout');  


///////////////////////////////   pagina de inicio \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
/*Route::get('/book&delivery', function () {
    return view('index');
})->name('inicio');*/

Route::get('/book&delivery', [HomeController::class,'index'])->name('inicio');


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



///////////////////////////////   Perfil de Usuario Datos de Contacto  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/*
Route::get('/Perfil', function (){
    return view('perfil');
})->name('perfil');
*/

Route::get('/Perfil', function (){
    return view('users.infoContacto');
})->name('perfil-contacto');


///////////////////////////////   Perfil de Usuario Direccion  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


Route::get('/Direccion', function (){
    return view('users.infoDireccion');
})->name('perfil-direccion');




