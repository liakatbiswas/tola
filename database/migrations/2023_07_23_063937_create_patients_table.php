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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneOne')->unique();
            $table->string('phoneTwo')->unique();
            $table->string('email')->unique();
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('upazila');
            $table->string('district');
            $table->string('problems');
            $table->string('yearsOfProblem');
            $table->string('leadSource');
            $table->string('servingCountry');
            $table->string('medicalReports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
