<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncTelefoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('func_telefo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('funcionarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('func_telefo');
    }
}
