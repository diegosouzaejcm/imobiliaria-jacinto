<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTextosRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id',
            'titulo' => 'required',
            'conteudo' => 'required',
        ];
    }
}
