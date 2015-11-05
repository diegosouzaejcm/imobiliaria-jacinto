<?php

use Illuminate\Database\Seeder;
use App\Imovel;

class ImovelTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('imoveis')->truncate();
        {

            for ($i=0; $i<20; $i++){

                Imovel::create([
                    'img'=> "doge2.jpg",
                    'nome'=> str_random(7),
                    'descricao'=>str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7)." ".str_random(7),
                    'localizacao'=>"Zona Norte",
                    'tipo'=>'Apartamento',
                    'quartos'=>3,
                    'vagas'=> 2,
                    'area'=>100,
                ]);
            }
        }
    }

}
