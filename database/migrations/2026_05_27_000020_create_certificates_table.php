<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('father_name');
            $table->string('certificate_number')->unique();
            $table->string('course_name');
            $table->string('session');
            $table->string('grade');
            $table->string('duration');
            $table->enum('status', ['Verified', 'Pending', 'Rejected'])->default('Pending')->index();
            $table->date('issue_date');
            $table->string('student_photo')->nullable();
            $table->string('certificate_pdf')->nullable();
            $table->text('qr_code')->nullable();
            $table->uuid('verification_slug')->unique()->nullable();
            $table->timestamps();

            $table->index('certificate_number');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
