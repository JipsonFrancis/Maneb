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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');

// possible area of errors
            $table->unsignedBigInteger('invigilator');
            $table->foreign('invigilator')
                ->references('id')
                ->on('users')
            ;

            $table->text('iframe')->nullable()->default('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85634.57460853884!2d34.94112324978507!3d-15.772457045573514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d84576cf1e00e9%3A0xdddd262797d7c570!2sAmaryllis%20Hotels!5e0!3m2!1sen!2smw!4v1680629877524!5m2!1sen!2smw');

            $table->enum('type', ['distribution', 'school']);
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};
