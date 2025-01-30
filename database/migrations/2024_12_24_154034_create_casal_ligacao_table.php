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
        Schema::create('casal_ligacao', function (Blueprint $table) {
            $table->id('id_casal_ligacao');
            $table->string('casal_ligacao')->unique();
            $table->integer('ano');
            $table->integer('ativo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casal_ligacao');
    }
};
