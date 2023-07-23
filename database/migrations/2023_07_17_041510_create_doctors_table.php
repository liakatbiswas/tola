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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('contactPersonName');
            $table->string('contactPersonPhone')->unique();
            $table->string('designation');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('photo');
            $table->string('visitingCard')->nullable();
            $table->string('background');
            $table->string('experience');
            $table->string('expertise');
            $table->string('awarded');
            $table->string('presentWorkStation');
            $table->string('previousWorkStation');
            $table->string('extraOrdinary');
            $table->string('publication');
            $table->string('ranking');
            $table->string('btoBStatus');
            $table->string('locationMap');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
