<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flashcards', function (Blueprint $table) {
            $table->id();
            
            // The relationship to the subjects table
            $table->foreignId('subject_id')->constrained('subjects')->cascadeOnDelete();
            
            // The flashcard content
            $table->text('question');
            $table->text('answer');
            $table->text('hint')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flashcards');
    }
};