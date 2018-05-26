<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaFormRequest extends FormRequest
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
            'nombre'         => 'required|max:50',
            'raza'           => 'max:50',
            'especie'        => 'max:50',
            'sexo'           => 'required|max:50',
            'descripcion'    => 'max:500',
            'fecha_registro' => 'max:50',
            'id_propietario' => 'max:11',
        ];
    }
}
