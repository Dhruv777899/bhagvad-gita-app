<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained()->cascadeOnDelete();
            $table->integer('verse_number');
            $table->text('text');
            $table->text('transliteration')->nullable();
            $table->text('word_meanings')->nullable();
            $table->text('translation');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verses');
    }
};
