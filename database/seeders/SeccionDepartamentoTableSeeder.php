<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionDepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccion_departamentos')->insert([
            'id'=>'1',
            'descripcion'=>'Contabilidad',
            'departamento_empresa_id'=>'1'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '2',
            'descripcion' => 'Finanzas empresariales ',
            'departamento_empresa_id' => '1'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '3',
            'descripcion' => 'Administracion empresarial',
            'departamento_empresa_id' => '2'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '4',
            'descripcion' => 'Contratacion & Empleo',
            'departamento_empresa_id' => '3'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '5',
            'descripcion' => 'Capacitacion & Desarrollo',
            'departamento_empresa_id' => '3'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '6',
            'descripcion' => 'Salarios & Sueldos',
            'departamento_empresa_id' => '3'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '7',
            'descripcion' => 'Gestion de mercadotecnica',
            'departamento_empresa_id' => '4'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '8',
            'descripcion' => 'Investigacion de mercados',
            'departamento_empresa_id' => '4'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '9',
            'descripcion' => 'Unidad de mando',
            'departamento_empresa_id' => '5'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '10',
            'descripcion' => 'Compras',
            'departamento_empresa_id' => '6'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '11',
            'descripcion' => 'Logistica',
            'departamento_empresa_id' => '7'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '12',
            'descripcion' => 'Control de riesgos & contingencia del negocio',
            'departamento_empresa_id' => '8'
        ]);

        DB::table('seccion_departamentos')->insert([
            'id' => '13',
            'descripcion' => 'Unidad de control del negocio',
            'departamento_empresa_id' => '9'
        ]);
    }
}
