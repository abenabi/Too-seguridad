<?php

namespace Database\Seeders;

use Estados;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolUsersTableSeeder::class]);
        $this->call([EstadosUserTableSeeder::class]);
        //$this->call([UserTableSeeder::class]);
        $this->call([GeneroTableSeeder::class]);
        $this->call([EstadoCivilTableSeeder::class]);
        $this->call([DepartamentoTableSeeder::class]);
        $this->call([MunicipioTableSeeder::class]);
        $this->call([EmpresaTableSeeder::class]);
        $this->call([DepartamentoEmpresaTableSeeder::class]);
        $this->call([SeccionDepartamentoTableSeeder::class]);
        $this->call([PuestoTrabajoTableSeeder::class]);
        $this->call([EmpleadoTableSeeder::class]);
    }
}
