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
            $table->id(); //NOS CREA UN ID AUTOINCREMENT UNSIGNED E INTEGER CON NOMBRE ID
            $table->string('name'); //VARCHAR DE NOMBRE NAME PUDIERA SER $table->string('name',100); VARCHAR DE 100
            $table->string('email')->unique(); //CAMPO DE TIPO UNICO 
            $table->timestamp('email_verified_at')->nullable(); //UNA FECHA QUE PUEDE SER NULA
            $table->string('password');
            $table->rememberToken(); //XREA COLUMNA CON EL NOMBRE rememberToken TIPO VARCHAR DE 100
            $table->timestamps(); //CREA DOS CULUMNAS UNA CON EL NOMBRE CREATE_AT Y OTRA UPDATE_AT
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
