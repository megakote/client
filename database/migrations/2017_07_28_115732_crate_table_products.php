<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guid'); //Айдишник в базе 1С
            $table->string('name', 100);
            $table->string('image', 250);
            $table->text('description');
            $table->string('unit', 10); //Единица измерения
            $table->integer('warehouse'); //Айдишник склада
            $table->integer('category_id'); //Айдишник Категории родительской
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
}
