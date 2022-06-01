<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([ /* 1 */
            'nombre' => 'Contenta me tienes',
            'autor' => 'Vero Garcia',
            'editorial' => 'Independiente',
            'categoria' => 'Comedia',
            'imagen' => 'https://images-na.ssl-images-amazon.com/images/I/61nR2bMEPXL.jpg'
        ]);
        DB::table('libros')->insert([ /* 2 */
            'nombre' => 'En tus zapatos',
            'autor' => 'Beth O\'Leary',
            'editorial' => 'Debolsillo',
            'categoria' => 'Comedia',
            'imagen' => 'https://images-na.ssl-images-amazon.com/images/I/810lz7tGnAL.jpg'
        ]);
        DB::table('libros')->insert([ /* 3 */
            'nombre' => 'Y tú, ¿qué quieres?',
            'autor' => 'Ada White',
            'editorial' => 'Kamadeva',
            'categoria' => 'Romance',
            'imagen' => 'https://m.media-amazon.com/images/I/51gJJfMemfL.jpg'
        ]);
        DB::table('libros')->insert([ /* 4 */
            'nombre' => 'La Sociedad de la Libélula',
            'autor' => 'Ana González Duque',
            'editorial' => 'Independiente',
            'categoria' => 'Fantasia',
            'imagen' => 'https://m.media-amazon.com/images/I/51N0TQAMdBL._SY346_.jpg'
        ]);
        DB::table('libros')->insert([ /* 5 */
            'nombre' => 'La Erupción Zafiro',
            'autor' => 'I.M. Redwright',
            'editorial' => 'Independiente',
            'categoria' => 'Fantasia',
            'imagen' => 'https://images-na.ssl-images-amazon.com/images/I/71S5y5dgHML.jpg'
        ]);
    }
}
