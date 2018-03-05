<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration {
    
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up() {
        Schema::create('motos', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('modelo', 100)->comment('Modelo');
            $table->string('marca', 100)->comment('Marca');
            $table->date('data_ini')->comment('Data Inicial');
            $table->date('data_fim')->comment('Data Final');;
            $table->string('estilo', 100)->nullable()->comment('Estilo');
            $table->integer('cilindrada')->nullable()->comment('Cilindrada');
            $table->integer('potencia')->nullable()->comment('potencia');
            $table->integer('tanque')->nullable()->comment('tanque');
            $table->integer('peso_seco')->nullable()->comment('peso_seco');
            $table->string('trasmissao', 100)->nullable()->comment('transmissao');
            $table->string('tipo_motor', 100)->nullable()->comment('tipo_motor');
            $table->string('refrigeracao', 100)->nullable()->comment('refrigeracao');
            $table->string('categoria', 100)->nullable()->comment('categoria');
            $table->integer('anexo_id')->unsigned();
            $table->foreign('anexo_id')->references('id')->on('anexos');
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        Schema::drop('motos');
    }
}