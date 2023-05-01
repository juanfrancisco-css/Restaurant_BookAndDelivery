<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//Cambiar el valor a true ya que viene por defecto a false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'surname'=>'required',
           'email'=> 'required|unique:users,email',
           'username'=>'required|unique:users,username',  //requerido y que el username sea unico
           'password'=>'required|min:8',
           'password_confirmation'=>'required|same:password', //requerido y que la password sea igual 
           'phone'=>'required|min:9' 

             
       ];
    }
}
