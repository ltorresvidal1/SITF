<?php

namespace App\Http\Requests\costosiniciales;

use Illuminate\Foundation\Http\FormRequest;

class StoreCostosiniciales extends FormRequest
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
         
            'idfinca'=>['required'],
            'csk'=>['required'],
            'csvk'=>['required'],
            'cpk'=>['required'],
            'cpvk'=>['required'],
            'nvk'=>['required'],
            'nvvk'=>['required'],
            'chk'=>['required'],
            'chvk'=>['required'],
            'hlk'=>['required'],
            'hlvk'=>['required'],
            'cmk'=>['required'],
            'cmvk'=>['required'],
            'mlk'=>['required'],
            'mlvk'=>['required'],            
            'mck'=>['required'],
            'mcvk'=>['required'],
            'tk'=>['required'],
            'tvk'=>['required'],
            'rk'=>['required'],
            'rvk'=>['required'],
            'nvgv'=>['required'],
            'vsgv'=>['required'],
            'vpgv'=>['required'],

   
    ];
    }
}
