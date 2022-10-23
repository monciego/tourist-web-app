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
        Schema::create('tour_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('tour_code');
            $table->date('tour_date');
            $table->string('tour_contact_person');
            $table->string('tour_contact_number');
            $table->string('tour_email');
            $table->string('tour_type');
            $table->string('number_of_adults')->nullable(); // 13 above
            $table->string('number_of_children')->nullable(); // 2 - 12 below
            $table->string('number_of_infants')->nullable(); // under 2
            $table->string('tour_message')->nullable(); // optional
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
        Schema::dropIfExists('tour_registrations');
    }
};
