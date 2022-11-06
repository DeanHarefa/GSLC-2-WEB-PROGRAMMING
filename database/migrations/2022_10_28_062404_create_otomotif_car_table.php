<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtomotifCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otomotif_cars', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->integer('Price');
            $table->longText('Description');
            $table->string('URL_IMAGE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otomotif_cars');
    }
}
