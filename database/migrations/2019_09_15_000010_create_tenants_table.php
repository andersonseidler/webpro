<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('nome');
            $table->string('email');
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();
            $table->string('comp_id')->nullable();
            $table->string('password');
            
            // your custom columns may go here
            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
