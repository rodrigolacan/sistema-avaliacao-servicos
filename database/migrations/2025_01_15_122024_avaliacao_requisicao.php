<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('requisicao_id'); // FK para a requisição
            $table->date('evento_dia');
            $table->integer('rate_evento');
            $table->integer('rate_servico');
            $table->integer('rate_cordialidade');
            $table->integer('rate_geral');
            $table->text('elogios_sugestoes')->nullable();
            $table->string('usuario_id')->nullable();
            $table->string('nome_usuario')->nullable();
            $table->timestamps();
        
            $table->foreign('requisicao_id')->references('id')->on('requisicoes')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
