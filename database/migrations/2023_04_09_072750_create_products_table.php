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
            $table->string('title');
            $table->double('price');
            $table->string('description');
            $table->enum('status', ['exist', 'not-exist']);
            $table->unsignedBigInteger('sub_category_id');
            $table->timestamps();

            $table->foreign('sub_category_id')->on('sub_categories')->references('id');
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
