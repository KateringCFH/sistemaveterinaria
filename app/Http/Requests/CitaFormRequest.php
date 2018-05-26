<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitaFormRequest extends FormRequest
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
            'fecha'       => 'max:45',
            'producto'    => 'max:200',
            'observacion' => 'max:500',
            'estado'      => 'max:50',
            'prox_cita'   => 'max:45',
            'peso'        => '',
            'edad'        => 'max:11',
            'id'  => 'max:11',
            'id_servicio'  => 'max:11',
            'id_mascota'   => 'max:11',
        ];
    }
}
