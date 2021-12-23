<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'id' => '1',
            'descripcion' => 'Santa Ana',
            'departamento_id' => '1'
        ]);

        DB::table('municipios')->insert([
            'id' => '2',
            'descripcion' => 'Sonsonate',
            'departamento_id' => '2'
        ]);

        DB::table('municipios')->insert([
            'id' => '3',
            'descripcion' => 'Ahuachapan',
            'departamento_id' => '3'
        ]);

        DB::table('municipios')->insert([
            'id' => '4',
            'descripcion' => 'Chalatenango',
            'departamento_id' => '4'
        ]);

        DB::table('municipios')->insert([
            'id'=>'5',
            'descripcion'=>'Nueva San Salvador',
            'departamento_id' => '5'
        ]);

        DB::table('municipios')->insert([
            'id' => '6',
            'descripcion' => 'San Salvador',
            'departamento_id' => '6'
        ]);

        DB::table('municipios')->insert([
            'id' => '7',
            'descripcion' => 'Cojutepeque',
            'departamento_id' => '7'
        ]);

        DB::table('municipios')->insert([
            'id' => '8',
            'descripcion' => 'Sensuntepeque',
            'departamento_id' => '8'
        ]);

        DB::table('municipios')->insert([
            'id' => '9',
            'descripcion' => 'San Vicente',
            'departamento_id' => '9'
        ]);

        DB::table('municipios')->insert([
            'id' => '10',
            'descripcion' => 'Zacatecoluca',
            'departamento_id' => '10'
        ]);

        DB::table('municipios')->insert([
            'id' => '11',
            'descripcion' => 'Usulutan',
            'departamento_id' => '11'
        ]);

        DB::table('municipios')->insert([
            'id' => '12',
            'descripcion' => 'San Miguel',
            'departamento_id' => '12'
        ]);

        DB::table('municipios')->insert([
            'id' => '13',
            'descripcion' => 'San Francisco',
            'departamento_id' => '13'
        ]);

        DB::table('municipios')->insert([
            'id' => '14',
            'descripcion' => 'La Union',
            'departamento_id' => '14'
        ]);




    }
}
