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
        Schema::create('business_owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('business_description')->nullable();
            $table->integer('business_year_founded')->nullable();
            $table->string('business_file')->nullable();
            $table->string('business_tags')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('business_owners');
    }
};
