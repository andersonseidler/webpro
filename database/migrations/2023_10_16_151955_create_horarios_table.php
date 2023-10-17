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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('entrada_1');
            $table->string('saida_1');
            $table->string('entrada_2');
            $table->string('saida_2');

            $table->string('segunda');
            $table->string('terca');
            $table->string('quarta');
            $table->string('quinta');
            $table->string('sexta');
            $table->string('sabado');
            $table->string('domingo');
            $table->string('id_empresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
