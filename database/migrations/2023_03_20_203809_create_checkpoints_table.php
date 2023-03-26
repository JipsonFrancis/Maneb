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
        Schema::create('checkpoints', function (Blueprint $table) {
            $table->id();
            $table->string('name');

// possible area of errors
            $table->unsignedBigInteger('invigilator');
            $table->foreign('invigilator')
                ->references('id')
                ->on('users')
            ;

// possible area of errors
            // $table->unsignedBigInteger('location');
            // $table->foreign('location')
            //     ->references('id')
            //     ->on('center')
            // ;

            $table->unsignedBigInteger('transit_id');
            $table->foreign('transit_id')
                ->references('id')
                ->on('transits')
            ;

            $table->unsignedBigInteger('box')->default(0);
            $table->foreign('box')
                ->references('id')
                ->on('blackboxes')
            ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkpoints');
    }
};
