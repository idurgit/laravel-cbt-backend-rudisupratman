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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->string('kategori');
            $table->string('jawaban_a');
            $table->string('jawaban_b');
            $table->string('jawaban_c');
            $table->string('jawaban_d');
            $table->enum('kunci', ['a', 'b', 'c', 'd']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
