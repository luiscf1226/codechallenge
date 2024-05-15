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
        Schema::create('quehaceres', function (Blueprint $table) {
            $table->id(); //id unico para identificar el quehacer
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //id del usuario que crea el quehacer
            $table->timestamps(); //fecha de creación y actualización
            $table->text('descripcion'); //descripción del quehacer
            $table->boolean('completado')->default(false); //estado del quehacer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quehaceres');
    }
};