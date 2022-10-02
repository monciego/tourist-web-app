<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->string('feature')->nullable();
            $table->string('property_tag')->nullable();
            $table->string('property_est')->nullable();
            $table->string('property_address')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('images')->nullable();
            $table->longText('property_description')->nullable();
            $table->string('property_offers')->nullable(); // comma seperated
            $table->decimal('latitude',8,6)->nullable();
            $table->decimal('longitude', 9,6)->nullable();
            $table->longText('property_details')->nullable();
            $table->integer('property_price')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owner_properties');
    }
};
