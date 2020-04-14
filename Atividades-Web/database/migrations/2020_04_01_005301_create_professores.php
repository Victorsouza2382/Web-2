<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessores extends Migration
{

    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->char('matricula');
            $table->char('cpf');
            $table->char('telefone');
            $table->string('email');
            $table->char('cep');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('uf');
            $table->string('municipio');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('professores');
    }
}
