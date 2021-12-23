<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoCivilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_civiles')->insert([
            'id'=>'1',
            'descripcion' => 'Casado/a',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'2',
            'descripcion' => 'Conviviente',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'3',
            'descripcion' => 'Anulado',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'4',
            'descripcion' => 'Separado de union legal',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'5',
            'descripcion' => 'Separado de union de hecho',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'6',
            'descripcion' => 'Viudo/a',
        ]);

        DB::table('estado_civiles')->insert([
            'id'=>'7',
            'descripcion' => 'Soltero/a',
        ]);

    }
}
