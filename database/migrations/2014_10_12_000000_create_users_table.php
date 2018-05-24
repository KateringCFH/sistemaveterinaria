<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id'); //id
            $table->string('name');   //nombre
            $table->string('app');    //apellido_paterno
            $table->string('apm');    //apellido_materno
            $table->string('email')->unique();  //email o username
            $table->string('password');   //contraseña
            $table->string('cargo');   //cargo
            $table->string('ci');    //CI
            $table->string('telefono');    //telefono
            $table->string('direccion');    //direccion
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
