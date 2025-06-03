<?php

use App\Models\ExamAttempt;
use App\Models\ExamQuestion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_attempt_answer', function (Blueprint $table) {
            $table->foreignIdFor(ExamAttempt::class);
            $table->foreignIdFor(ExamQuestion::class);
            $table->string('answer');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_attempt_answer');
    }
};
