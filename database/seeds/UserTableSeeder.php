<?php

use App\Usuario;
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        {

            for ($i=0; $i<10; $i++){

                Usuario::create([
                    'name'=> "Pessoa ",
                    'email'=>str_random(2)."@gmail.com",
                    'password'=>bcrypt('123'),
                    'telefone'=>23469716,
                    'admin'=>0,
                ]);
            }
                Usuario::create([
                    'name' => "Maria ",
                    'email' => "banana@admin.com",
                    'password' => bcrypt('fodase'),
                    'telefone' => 25986431,
                    'admin' => 1
                ]);

                Usuario::create([
                    'name' => "Joao ",
                    'email' => "banana@user.com",
                    'password' => bcrypt('fodase'),
                    'telefone' => 40028922,
                    'admin' => 0
                ]);

        }
    }
}
