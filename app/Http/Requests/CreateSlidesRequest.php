<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSlidesRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'imagem'=>'required',
            'posicao'=>'required',

        ];
    }
}