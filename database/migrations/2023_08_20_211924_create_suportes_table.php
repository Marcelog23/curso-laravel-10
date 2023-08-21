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
        Schema::create('suportes', function (Blueprint $table) {
            $table->id();
            $table->string('ds_assunto');
            $table->enum('id_status', ['a','p','c']);
            $table->text('ds_texto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suportes');
    }
};
