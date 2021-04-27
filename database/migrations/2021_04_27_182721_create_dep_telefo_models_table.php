<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepTelefoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_telefo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_depart')->unsigned();
            $table->foreign('id_depart')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('telefone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dep_telefo');
    }
}
