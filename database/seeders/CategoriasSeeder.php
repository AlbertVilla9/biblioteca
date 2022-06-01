<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Comedia',
        ]);  
        DB::table('categorias')->insert([
            'nombre' => 'Fantasia',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Misterio',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Historico',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Infantil',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Drama',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Romance',
        ]);
    }
}
