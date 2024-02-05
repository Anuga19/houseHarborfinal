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
            $table->string('property_image');
            $table->string('property_address');
            $table->string('property_listing_name');
            $table->decimal('property_price');
            $table->enum('property type', ['Rent', 'Sale']);
            $table->string('property_city');
            $table->string('property_purpose');
            $table->integer('property_rooms');
            $table->integer('property_bathrooms');
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
