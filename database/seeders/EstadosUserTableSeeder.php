<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'name' => 'desbloqueado'
        ]);

        DB::table('estados')->insert([
            'name' => 'bloqueado'
        ]);
    }
}
