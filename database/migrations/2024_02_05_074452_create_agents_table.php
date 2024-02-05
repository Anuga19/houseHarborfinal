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
    Schema::create('agents', function (Blueprint $table) {
        $table->id();
        $table->string("firstname");
        $table->string("lastname");
        $table->string("email"); // Use the email data type and add unique constraint
        $table->string("address");
        $table->string("image");
        $table->string("license", 20); // Correct syntax for defining VARCHAR with a length
        $table->string("username", 255); // Correct syntax for defining VARCHAR with a length
        $table->string("password", 255); // Correct syntax for defining VARCHAR with a length
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
        Schema::dropIfExists('agents');
    }
};
