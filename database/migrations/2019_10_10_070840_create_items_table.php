<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 80);
            $table->text('explanation');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->text('image');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('delivery_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('duration_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('duration_id')->references('id')->on('durations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
