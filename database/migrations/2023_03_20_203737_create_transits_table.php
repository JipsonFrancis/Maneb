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
        Schema::create('transits', function (Blueprint $table) {
            $table->id();
            $table->string('name');

// area of possible error
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')
                ->on('users')
            ;

// area of possible error
            $table->unsignedBigInteger('truck_id');
            $table->foreign('truck_id')
                ->references('id')
                ->on('trucks')
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
        Schema::dropIfExists('transits');
    }
};
