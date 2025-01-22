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
        Schema::create('prim_segu_consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias')->nullOnDelete()->cascadeOnUpdate();
            $table->string('circuito_id');
            $table->string('proyecto_uno')->nullable();
            $table->foreignId('estatus_uno_id')->nullable()->references('id')->on('estatuses')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_uno_id')->nullable()->references('id')->on('tipos')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('categoria_uno_id')->nullable()->references('id')->on('categorias')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('subcategoria_uno_id')->nullable()->references('id')->on('subcategorias')->nullOnDelete()->cascadeOnUpdate();
            $table->string('proyecto_dos')->nullable();
            $table->foreignId('estatus_dos_id')->nullable()->references('id')->on('estatuses')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_dos_id')->nullable()->references('id')->on('tipos')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('categoria_dos_id')->nullable()->references('id')->on('categorias')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('subcategoria_dos_id')->nullable()->references('id')->on('subcategorias')->nullOnDelete()->cascadeOnUpdate();
            $table->string('ente')->nullable();
            $table->string('codigoEnte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prim_segu_consultas');
    }
};
