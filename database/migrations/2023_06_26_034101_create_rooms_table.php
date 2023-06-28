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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Room_id')->nullable();
            $table->foreign('Room_id')->references('id')->on('room_statuses');
            $table->integer('Capacity');
            $table->longText('Description');
            $table->string('Date');
            $table->string('TimeStart');
		    $table->string('TimeEnd');
            $table->unsignedBigInteger('Status_id')->nullable();
            $table->foreign('Status_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
