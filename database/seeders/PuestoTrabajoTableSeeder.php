<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestoTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puesto_trabajos')->insert([
            'id'=>'1',
            'nombre'=>'Contador',
            'descripcion'=>'Contador de la empresa',
            'salario'=>'400.00',
            'seccion_departamento_id'=>'1'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '2',
            'nombre' => 'Auxiliar contable',
            'descripcion' => 'Auxiliar del contador de la empresa',
            'salario' => '250.00',
            'seccion_departamento_id' => '1'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '3',
            'nombre' => 'Jefe de Contabilidad',
            'descripcion' => 'Jefe de Contabilidad de la empresa',
            'salario' => '600.00',
            'seccion_departamento_id' => '1'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '4',
            'nombre' => 'Jefe de administracion',
            'descripcion' => 'Jefe de la administracion de la empresa',
            'salario' => '600.00',
            'seccion_departamento_id' => '2'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '5',
            'nombre' => 'Jefe de Contratacion & Empleo',
            'descripcion' => 'Encaragdo de la contratacion del personal',
            'salario' => '500.00',
            'seccion_departamento_id' => '4'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '6',
            'nombre' => 'Jefe de Capacitacion & Desarrollo',
            'descripcion' => 'Encargado de la capacitacion del personal de la empresa',
            'salario' => '600.00',
            'seccion_departamento_id' => '5'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '7',
            'nombre' => 'Jefe de Salarios & Sueldos ',
            'descripcion' => 'Encargado de administrar los fondos para pagar a los empledaos',
            'salario' => '550.00',
            'seccion_departamento_id' => '6'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '8',
            'nombre' => 'Jefe de Gestiona de mercadotecnia ',
            'descripcion' => 'Encargado de la mercadotecnia de la empresa',
            'salario' => '700.00',
            'seccion_departamento_id' => '7'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '9',
            'nombre' => 'Jefe de Investigacion de mercados ',
            'descripcion' => 'Encargado de investigar posibles nichos de ventas',
            'salario' => '800.00',
            'seccion_departamento_id' => '8'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '10',
            'nombre' => 'Jefe de Unidad de mando ',
            'descripcion' => 'Encargado de controlar la empresa',
            'salario' => '500.00',
            'seccion_departamento_id' => '9'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '11',
            'nombre' => 'Jefe de Compras ',
            'descripcion' => 'Encargado de flujo de efectivo saliente de la empresa ',
            'salario' => '450.00',
            'seccion_departamento_id' => '10'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '12',
            'nombre' => 'Jefe de Logistica ',
            'descripcion' => 'Encargado de la logistica de la empresa ',
            'salario' => '600.00',
            'seccion_departamento_id' => '11'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '13',
            'nombre' => 'Jefe de Control de riesgos & contingencia del negocio ',
            'descripcion' => 'Encargado de contingencia del negocio ',
            'salario' => '900.00',
            'seccion_departamento_id' => '12'
        ]);

        DB::table('puesto_trabajos')->insert([
            'id' => '14',
            'nombre' => 'Jefe de Unidad de control',
            'descripcion' => 'Encargado de la empresa ',
            'salario' => '1200.00',
            'seccion_departamento_id' => '13'
        ]);




    }
}
