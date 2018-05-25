<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropietarioFormRequest extends FormRequest
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
            'nombre'     => 'required|max:45',
            'ap_paterno' => 'required|max:45',
            'ap_materno' => 'max:45',
            'telf'       => 'max:8',
            'ci'         => 'required|max:8',
            'direccion'  => 'max:100',
            'rfid'       => 'max:45|required',
        ];
    }
}
