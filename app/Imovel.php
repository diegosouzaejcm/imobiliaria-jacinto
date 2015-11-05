<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imoveis';

    protected $fillable = ['id','nome','img','descricao','localizacao', 'tipo', 'quartos', 'vagas', 'area'];

}


