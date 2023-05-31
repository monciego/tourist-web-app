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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
        /*     $table->foreignId('category_id')->constrained('categories')
            ->onUpdate('cascade')->onDelete('cascade'); */
            $table->date('date_of_app')->nullable();
            $table->string('app_number')->nullable();
            $table->string('permit_number')->nullable();
            $table->string('property_name');
            $table->longText('property_description')->nullable();
            $table->string('property_address')->nullable();
            $table->date('date_of_registration')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('properties');
    }
};
