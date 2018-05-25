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
            'cargo'       => 'max:45',
            'fecha'       => 'max:45',
            'hora'        => 'max:45',
            'producto'    => 'max:45',
            'observacion' => 'max:200',
            'estado'      => 'max:45',
            'prox_cita'   => 'max:45',
            'peso'        => '',
            'edad'        => 'max:11',
            'idpersonal'  => 'max:11',
            'idmascota'   => 'max:11',
            'idservicio'  => 'max:11',
        ];
    }
}
