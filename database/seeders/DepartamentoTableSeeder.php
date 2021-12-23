<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'id'=>'1',
            'descripcion' => 'Santa Ana',
        ]);

        DB::table('departamentos')->insert([
            'id' => '2',
            'descripcion' => 'Sonsonte',
        ]);

        DB::table('departamentos')->insert([
            'id' => '3',
            'descripcion' => 'Ahuachapan',
        ]);

        DB::table('departamentos')->insert([
            'id' => '4',
            'descripcion' => 'Chalatenango',
        ]);

        DB::table('departamentos')->insert([
            'id' => '5',
            'descripcion' => 'La Libertad',
        ]);

        DB::table('departamentos')->insert([
            'id' => '6',
            'descripcion' => 'San Salvador',
        ]);

        DB::table('departamentos')->insert([
            'id' => '7',
            'descripcion' => 'Cuscatlan',
        ]);

        DB::table('departamentos')->insert([
            'id' => '8',
            'descripcion' => 'Cabañas',
        ]);

        DB::table('departamentos')->insert([
            'id' => '9',
            'descripcion' => 'San Vicente',
        ]);

        DB::table('departamentos')->insert([
            'id' => '10',
            'descripcion' => 'La Paz',
        ]);

        DB::table('departamentos')->insert([
            'id' => '11',
            'descripcion' => 'Usulutan',
        ]);

        DB::table('departamentos')->insert([
            'id' => '12',
            'descripcion' => 'San Miguel',
        ]);

        DB::table('departamentos')->insert([
            'id' => '13',
            'descripcion' => 'Morazan',
        ]);

        DB::table('departamentos')->insert([
            'id' => '14',
            'descripcion' => 'La Union',
        ]);
    }
}
