<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('eje_id')->nullable()->references('id')->on('ejes')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('circuito_id')->nullable()->references('id')->on('circuitos')->nullOnDelete()->cascadeOnUpdate();
            $table->string('nombre');
            $table->foreignId('estatus_id')->nullable()->references('id')->on('estatuses')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_id')->nullable()->references('id')->on('tipos')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('categoria_id')->nullable()->references('id')->on('categorias')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('subcategoria_id')->nullable()->references('id')->on('subcategorias')->nullOnDelete()->cascadeOnUpdate();
            $table->string('ente');
            $table->boolean('primera');
            $table->boolean('segunda');
            $table->string('codigoEnte');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
