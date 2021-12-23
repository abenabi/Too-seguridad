<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombres'=>'Diego Armando',
            'apellidos'=>'Perez Lopez',
            'genero_id'=>'1',
            'estado_civil_id'=>'1',
            'puesto_trabajo_id'=>'1',
            'dui'=>'05817375-5',
            'nit'=>'0614-070199-122-0',
            'isss'=>'123456789',
            'nup'=>'361651670003',
            'direccion'=>'Metapan',
            'municipio_id'=>'1',
            'telefono_celular'=>'7777-7777',
            'telefono_casa'=>'2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Maria Eugenia',
            'apellidos' => 'Marquez Lopez',
            'genero_id' => '2',
            'estado_civil_id' => '3',
            'puesto_trabajo_id' => '2',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Urbanizacion Jardines de la Sabana 1, Avenida B',
            'municipio_id' => '4',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Maria Fernanda',
            'apellidos' => 'Lopez Perez',
            'genero_id' => '2',
            'estado_civil_id' => '1',
            'puesto_trabajo_id' => '4',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Cuidad de San miguel ',
            'municipio_id' => '12',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Pedro Juan',
            'apellidos' => 'Lopez Perez',
            'genero_id' => '1',
            'estado_civil_id' => '5',
            'puesto_trabajo_id' => '3',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Urbanizacion el oriente ',
            'municipio_id' => '14',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Mario Alfonso',
            'apellidos' => 'Duque Lopez',
            'genero_id' => '1',
            'estado_civil_id' => '6',
            'puesto_trabajo_id' => '4',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Urbanizacion el occidente ',
            'municipio_id' => '1',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Pedro Juan',
            'apellidos' => 'Melgar Padilla',
            'genero_id' => '1',
            'estado_civil_id' => '1',
            'puesto_trabajo_id' => '5',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Sonsacate ',
            'municipio_id' => '2',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Paola Maria',
            'apellidos' => 'Lopez Lopez',
            'genero_id' => '2',
            'estado_civil_id' => '6',
            'puesto_trabajo_id' => '6',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Colonia Aguachapan ',
            'municipio_id' => '3',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);

        DB::table('empleados')->insert([
            'nombres' => 'Juan Edgar',
            'apellidos' => 'Lopez Martinez',
            'genero_id' => '1',
            'estado_civil_id' => '1',
            'puesto_trabajo_id' => '7',
            'dui' => '05817375-5',
            'nit' => '0614-070199-122-0',
            'isss' => '123456789',
            'nup' => '361651670003',
            'direccion' => 'Urbanizacion el oriente ',
            'municipio_id' => '13',
            'telefono_celular' => '7777-7777',
            'telefono_casa' => '2222-2222'
        ]);
    }
}
