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
        Schema::create('task_missions', function (Blueprint $table) {
            $table->id();
            $table->text('title_uz')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('text_uz')->nullable();
            $table->text('text_ru')->nullable();
            $table->text('text_en')->nullable();
            $table->text('business_plan_uz')->nullable();
            $table->text('business_plan_ru')->nullable();
            $table->text('business_plan_en')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_missions');
    }
};
