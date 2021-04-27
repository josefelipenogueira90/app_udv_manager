<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('data_nascimento');
            $table->string('sexo');
            $table->double('salario',10,2);
            $table->string('cargo');
            $table->string('categoria');
            $table->string('situacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
