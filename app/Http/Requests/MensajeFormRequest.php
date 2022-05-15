<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MensajeFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'edad' => 'required|numeric',
            'frequency' =>'required',
            'program' =>'required',
            'tipo_programa' =>'required',
            'movie_favorite' =>'required',
            'program_favorite' =>'required',
        ];

      
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'edad.required' => 'El edad es requerido',
            'frequency.required' => 'Este campo es requerido',
            'program.required' => 'Este campo es requerido',
            'tipo_programa.required' => 'Este campo es requerido',
            'movie_favorite.required' => 'Este campo es requerido',
            'program_favorite.required' => 'Este campo es requerido',
        ];
    }
}
