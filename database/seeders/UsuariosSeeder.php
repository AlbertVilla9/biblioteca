<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ /* 1 */
            'name' => 'Cliente',
            'email' => 'cliente@cliente',
            'password' => Hash::make('password'),
            'admin' => 0,
        ]);

        DB::table('users')->insert([ /* 1 */
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('password'),
            'admin' => 1,
        ]);
    }
}
