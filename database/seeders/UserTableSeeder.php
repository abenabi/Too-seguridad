<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"admin",
            'email'=>'admin@ues.edu.sv',
            'password'=>Hash::make('admin123'),
            'rol_id'=>'1',
            "estado_id"=>'1',
            "google2fa_secret"=>'394829'
        ]);

        DB::table('users')->insert([
            "name" => "empleado",
            'email' => 'empleado@ues.edu.sv',
            'password' => Hash::make('empleado'),
            'rol_id' => '2',
            "estado_id" => '1',
            "google2fa_secret"=>'395829'
        ]);

        DB::table('users')->insert([
            "name" => "empleado2",
            'email' => 'empleado2@ues.edu.sv',
            'password' => Hash::make('empleado2'),
            'rol_id' => '2',
            "estado_id" => '2',
            "google2fa_secret"=>'194829'
        ]);

        DB::table('users')->insert([
            "name" => "empleado3",
            'email' => 'empleado3@ues.edu.sv',
            'password' => Hash::make('empleado3'),
            'rol_id' => '2',
            "estado_id" => '1',
            "google2fa_secret"=>'394879'
        ]);

        DB::table('users')->insert([
            "name" => "empleado4",
            'email' => 'empleado4@ues.edu.sv',
            'password' => Hash::make('empleado4'),
            'rol_id' => '2',
            "estado_id" => '1',
            "google2fa_secret"=>'309829'
        ]);
    }
}
