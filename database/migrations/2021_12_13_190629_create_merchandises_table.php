<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('price');
            $table->string('code');
            $table->text('characteristic');
            $table->text('description');
            $table->string('size');
            $table->string('coating');
            $table->string('opening');
            $table->string('lock');
            $table->string('bay');
            $table->string('producer');
            $table->string('quantity');
            $table->string('brand');
            $table->string('modification');
            $table->string('type');
            $table->string('additionally');
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
        Schema::dropIfExists('merchandises');
    }
}
