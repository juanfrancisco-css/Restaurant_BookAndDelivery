<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest; //importa la libreria LoginRequest para controlar las validaciones
use Illuminate\Support\Facades\Auth; //importa una libreria para autenticaciones

class LoginController extends Controller
{
    
    //visualizar
    public function show (){  

        if(Auth::check()){ // verificar si hay un usuario con una sesion autenticada 

            /*
            Si existe un usuario ya autenticado no podra acceder al formulario de login
            sera redirigido al inicio
            */
            return redirect()->route('inicio');
        }
        return view('auth.login');
    }


    //acceder 
    public function login (LoginRequest $request){ //Hacemos la llamada a una clase ( ella va a gestionar quien entra )
        $credentials = $request->getCredentials(); //llamamos a nuestro method de LoginRequest
    
        /*
        Algunos de los methodos mas importante que tiene la clase 'Auth' 
        validate ( Valida los campos  )
        */
        if(!Auth::validate($credentials)){ //Si no existe este usuario 
    
            //redirige al login (se queda en la pagina y muestra mensajes de error)
            return redirect()->route('login')->withErrors('auth.login');//  Error
            
           
        }
    
         //Si existe el usuario en nuestra bbdd
         $user = Auth::getProvider()->retrieveByCredentials($credentials);//devolver las credenciales 
         Auth::login($user); // Hacer login y crear nuestras sesiones 
    
    
         //llamamos al method
         return $this->authenticated($request,$user);//methodo que una vez auntenticado sea llamado 
    
    
        }
        public function authenticated(Request $request,$user){  //nombre reservado 

            return redirect()->route('inicio');   //que me redirija a la pagina de incio 
    
        }
}
