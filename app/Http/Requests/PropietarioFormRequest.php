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
            'nombre'     => 'required|max:50',
            'app' => 'required|max:50',
            'apm' => 'max:45',
            'ci'         => 'required|max:9',
            'telefono'   => 'required|max:9',
            'direccion'  => 'max:200',
            'rfid'       => 'max:11|required',
        ];
    }
}
