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
            $table->integer('price');
            $table->integer('user_id');
            $table->tinyInteger('status_id');
            $table->tinyInteger('image_id')->nullable();
            $table->integer('category_id');
            $table->tinyInteger('delivery_id');
            $table->tinyInteger('area_id');
            $table->tinyInteger('duration_id');
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
        Schema::dropIfExists('items');
    }
}
