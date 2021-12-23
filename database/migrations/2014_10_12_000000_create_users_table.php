<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger("rol_id")->nullable()->default('2');     //se debera cambiar luego
            $table->unsignedBigInteger('estado_id')->nullable()->default('2');  // se debera cambiar luego el default
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //Llave foranea
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete("cascade");
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
