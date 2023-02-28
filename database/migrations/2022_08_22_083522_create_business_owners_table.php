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
        Schema::create('business_owners', function (Blueprint $table) { // property information
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name_of_registrant')->nullable();
            $table->string('owner_address')->nullable();
            $table->string('owner_gender')->nullable();
            $table->date('owner_date_of_birth')->nullable();
            $table->string('owner_contact_number')->nullable();
                    $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('business_owners');
    }
};
