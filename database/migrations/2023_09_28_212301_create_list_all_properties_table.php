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
        Schema::create('list_all_properties', function (Blueprint $table) {
            $table->id();
            $table->string('county');
            $table->string('country');
            $table->string('town');
            $table->text('description');
            $table->string('display_address');
            $table->string('image');
            $table->string('thumbnail');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('number_of_bedrooms');
            $table->string('number_of_bathrooms');
            $table->string('price');
            $table->string('property_type');
            $table->string('for_sale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_all_properties');
    }
};
