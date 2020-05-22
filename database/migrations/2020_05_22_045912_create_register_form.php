<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla para registro
        Schema::create('registers', function (Blueprint $table){
            $table->increments('ID');
            $table->string('nombre',250);
            $table->string('aPaterno',250);
            $table->string('aMaterno',250);
            $table->string('genero',250);
            $table->string('edad',4);
            $table->string('estadoCivil',250);
            $table->string('email')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
