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
        Schema::create('register_unclassified_tourists', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('contact_person');
            $table->date('date_registered');
            $table->time('time_in');
            $table->time('time_out')->nullable();
            $table->string('environment_fee')->nullable();
            $table->string('entrance_fee')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('number_of_adults')->nullable();
            $table->string('number_of_infants')->nullable();
            $table->string('number_of_foreigners')->nullable();
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
        Schema::dropIfExists('register_unclassified_tourists');
    }
};
