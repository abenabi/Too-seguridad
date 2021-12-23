<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DepartamentoEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento_empresas')->insert([
            'id'=>'1',
            'nombre'=>'Financiero',
            'numero_empleados'=>'10',
            'empresa_id'=>'1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id'=>'2',
            'nombre' => 'Administracion',
            'numero_empleados' => '20',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '3',
            'nombre' => 'Recurso Humano',
            'numero_empleados' => '25',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '4',
            'nombre' => 'Marketing',
            'numero_empleados' => '10',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '5',
            'nombre' => 'Comercial',
            'numero_empleados' => '15',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '6',
            'nombre' => 'Compras',
            'numero_empleados' => '20',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '7',
            'nombre' => 'Logistica & Operaciones',
            'numero_empleados' => '30',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '8',
            'nombre' => 'Control de Gestion',
            'numero_empleados' => '35',
            'empresa_id' => '1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id' => '9',
            'nombre' => 'Direccion General ',
            'numero_empleados' => '5',
            'empresa_id' => '1'
        ]);
    }
}
