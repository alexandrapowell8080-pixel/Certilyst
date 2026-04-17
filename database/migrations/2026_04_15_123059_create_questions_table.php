<?php

use App\Models\Exam;
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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Exam::class, 'exam_id');
            $table->text('extract');
            $table->text('question');
            $table->string('choiceA');
            $table->string('choiceB');
            $table->string('choiceC');
            $table->string('choiceD');
            $table->string('choiceE')->nullable();
            $table->string('choiceF')->nullable();
            $table->string('choiceG')->nullable();
            $table->string('correct_answer');
            $table->text('rationale');
            $table->string('question_type');
            $table->string('image');
            $table->string('url');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
