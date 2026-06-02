<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->unsignedTinyInteger('age')->nullable();
            $table->string('education_level')->nullable(); // 10,12,graduation
            $table->string('graduation_percentage')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
