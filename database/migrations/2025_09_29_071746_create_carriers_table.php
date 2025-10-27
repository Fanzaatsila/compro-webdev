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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('division');
            $table->string('city');
            $table->string('range_salary');
            $table->text('description');
            $table->text('qualification');
            $table->text('benefits');
            $table->enum('type', ['part-time', 'full-time', 'internship', 'freelance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
