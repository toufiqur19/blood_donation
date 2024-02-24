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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('location');
            $table->string('address');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('religion');
            $table->string('profession');
            $table->string('total_donat');
            $table->string('image');
            $table->string('dob');
            $table->string('last_donat');
            $table->string('about')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('in')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
