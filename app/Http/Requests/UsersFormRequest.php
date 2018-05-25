<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
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
              'name' => 'required|string|max:255',
              'app' => 'string|max:45',
              'apm' => 'string|max:45',
              'email' => 'string|max:20',
              'password' => 'string|min:6|confirmed',
              'cargo' => 'string|max:45',
              'ci' => 'max:9',
              'telefono' => 'max:9',
              'direccion' => 'string|max:255',
        ];
    }

}
