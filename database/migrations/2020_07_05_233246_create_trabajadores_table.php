<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('user_id')->unsigned()->index();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('dni');
            $table->integer('telefono');
            $table->date('fnacimiento');
            $table->string('area');
            $table->string('cargo');
            $table->string('imagen');

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
        Schema::dropIfExists('trabajadores');
    }
}
