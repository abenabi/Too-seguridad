<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'id'=>'1',
            'nombre'=>'Empresa de seguridad',
            'clasificacion'=>'Grande',
            'tipo_administracion'=>'privada',
            'tipo_propiedad'=>'privada',
            'direccion'=>'San salvador,colonia medica'
        ]);
    }
}
