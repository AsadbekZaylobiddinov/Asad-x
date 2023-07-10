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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('state');
            $table->string('title');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('podcategory_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreign('city_id')->constrained();
            $table->foreign('area_id')->constrained();
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
        Schema::dropIfExists('products');
    }
};
