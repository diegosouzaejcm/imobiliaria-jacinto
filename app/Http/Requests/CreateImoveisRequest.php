<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateImoveisRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'nome'=>'required',
        'img'=>'required',
        'descricao'=>'required',
        'localizacao'=>'required',
        'tipo'=>'required',
        'quartos'=>'required',
        'vagas'=>'required',
        'area'=>'required',
        ];
    }
}
