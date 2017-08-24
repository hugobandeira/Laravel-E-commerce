<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nome' => 'ELETRODOMESTICOS']);
        Categoria::create(['nome' => 'ELETRONICA']);
        Categoria::create(['nome' => 'BRINQUEDOS']);
        Categoria::create(['nome' => 'ESPORTES']);

    }
}