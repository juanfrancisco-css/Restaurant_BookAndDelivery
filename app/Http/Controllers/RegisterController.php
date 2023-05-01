<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest; //importamos la clase RegisterRequest para controlar las validaciones
use App\Models\User; //importamos la clase User para instanciar y dar de alta 
use Illuminate\Support\Facades\Auth; //importa una libreria para autenticaciones 

class RegisterController extends Controller
{
    //ruta de la vista 

    public function show (){

         //si esta autenticado va para la pagina home
        //En cada contoller cuando quieres validar que el usuario esta autenticado vamos utilizar  'Auth:check'
        if(Auth::check()){
             /*
            Si existe un usuario ya autenticado no podra acceder al formulario de registro
            sera redirigido al inicio
            */
            return redirect()->route('inicio');
        }

        return view('auth.registro');
    }


    //crear un objeto 'RegisterRequest' para controlar las validaciones /autenticaciones 
    public function register(RegisterRequest $request){
   /* Tenemos dos opciones para dar de alta 
      opcion 1) */
      $user =  User::create($request->validated()); //Hara la llamada a nuestras reglas automaticamente ( method rules)
    
      
   /*  opcion 2)
                      $request->validate([
                                              'name'=> 'required|unique:categories|max:255',
                                              'color'=>'required|max:7'
                                         ]);
  
                      $user = new User;
                      $user->name=$request->name;
                      $user->color=$request->color;
                      $user->save();
      */
      return redirect ()->route('login')->with('success','Cuenta Creada Exitosamente');
    }
    
}
