<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['pending', 'confirmed', 'canceled'])->default('pending');
            $table->string('identification_card', 255);
            $table->string('licence', 255);
            $table->date('licenceDate');
            $table->datetime('pickupDate');
            $table->datetime('dropofDate');
            $table->string('pickupLocation', 255);
            $table->string('dropofLocation', 255);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('announcement_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('announcement_id')->references('id')->on('announcements')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
