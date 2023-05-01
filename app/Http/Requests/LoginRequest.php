<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory; //importamos la clase y la renombramos 

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Cambiar el valor a true ya que por defecto viene a false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required', //campos solicitados a traves del formulario
            'password'=>'required'
        ];
    }

     //La posibilidad de entrar con email o con username 
     public function getCredentials(){  //method ya definido 

        $username = $this->get('username');//devuelvo el valor de la caja cuyo name es 'username'

        //Si es un email 
        if($this->isEmail($username)){

            return [
             
                'email'=> $username,
                'password'=>$this->get('password')
            ];
        }

        //si es un username 

        //solamente regresa estos parametros
        return $this->only('username','password');
    }

    public function isEmail($value){

        /*
        Podemos hacerlo atraves de expresiones regulares
        pero importamos la clase  'ValidationFactory' ella ya cuenta con diversos methodos
        para validar
        */
                                           //solo la referencia 
        $factory = $this->container->make(ValidationFactory::class); //una instaciacion
            
        /*
         methodo 'make'cuando va a esperar  parametros :
        1) el primero es la asignacion del valor 
              -username es igual al valor dado por parametros
        2) y el segundo la regla o las reglas que quiero aplicar 
              -si es un email 
        
        El resultado de 'make' me devuelve un objeto validator
        El objeto validator tiene un method llamado fails() 

       - Al asignarle un valor y al compararlo con un correo y  NO COINCIDE me devuelve verdadero y cambio el valor a false 
       - Al asiganrle un valor y compararlo con un correo y SI COINCIDE  me devuelve false cambio el valor a true 
        */
        return !$factory->make(['username'=> $value],['username'=>'email'])->fails();
    
    }
}
