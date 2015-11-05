<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUsuariosRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'telefone' => 'required|min:8',
            'password' => 'required|confirmed|min:6',


        ];
    }

}
