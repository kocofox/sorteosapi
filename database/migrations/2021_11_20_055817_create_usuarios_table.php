<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username')->unique();
            $table->string('tipo_doc')->unique();
            $table->string('nro_doc')->unique();
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->string('perfil')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('sorteo');
            $table->string('dat');
            $table->string('dat2');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
