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
        Schema::create('roombooking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('patient_id');
            $table->date('admission_date');
            $table->date('discharge_date')->nullable();
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('patient_id')->references('id')->on('patient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roombooking');
    }
};
