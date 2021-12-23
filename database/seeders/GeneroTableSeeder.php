<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'id'=>'1',
            'descripcion'=>'Hombre',
        ]);

        DB::table('generos')->insert([
            'id'=>'2',
            'descripcion' => 'Mujer',
        ]);

    }
}
