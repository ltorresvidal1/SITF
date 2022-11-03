<?php

namespace App\Http\Requests\clientes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreClientes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
         
            'nit'=>['required',Rule::unique('clientes','ruta')->ignore($this->route('cliente'))],
            'nombre'=>['required'],
            'fechainicial'=>'required',
            'fechafinal'=>'required',
            'ruta'=>['required',Rule::unique('clientes','ruta')->ignore($this->route('cliente'))]
   
    ];
    }

        /* cambiar nombre a atributo
    public function attributes(){
        return [
         
            'codigofinca'=>'Luis torres',
    ];
    } 
    */

/* mensajes personalizados
    public function messages()
    {
        return [
            'nombrefinca.required'=>'Luis torres',
    ];  
    }
*/

}
