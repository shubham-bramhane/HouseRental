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
            $table->foreignId('user_id')->constrained();
            $table->string('location');
            $table->string('PropertyName');
            $table->string('PropertyType');
            $table->string('status');
            $table->string('area');
            $table->string('Beds');
            $table->string('Baths');
            $table->string('garage');
            $table->string('PropertyDesc');
            $table->string('price');
            $table->string('amenities');
            $table->string('propertyImage');


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
