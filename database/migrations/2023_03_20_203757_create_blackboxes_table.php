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
        Schema::create('blackboxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            // QR-CODES WLLL FORMED USING THE SITE DOMAIN + SUBJECT_ID + CENTER_ID + ID https://www.example.com/1/2/3/4
            $table->string('QR');

            $table->unsignedBigInteger('packet_id');
            $table->foreign('packet_id')
                ->references('id')
                ->on('packets')
            ;

// area of possible error
            $table->unsignedBigInteger('initial_location');
            $table->foreign('initial_location')
                ->references('id')
                ->on('centers')
            ;

// area of possible error
            // Destination
            $table->unsignedBigInteger('destination');
            $table->foreign( 'destination')
                ->references('id')
                ->on('centers')
            ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blackboxes');
    }
};
