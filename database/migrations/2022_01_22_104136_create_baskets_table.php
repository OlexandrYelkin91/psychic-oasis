<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->string('productid');
            $table->string('user');
            $table->string('size');
            $table->string('coating');
            $table->string('opening');
            $table->string('lock');
            $table->string('bay');
            $table->string('quiality');
            $table->string('modification');
            $table->string('price');
            $table->text('coment');
            $table->string('otherinfo');
             $table->string('orderedid');
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
        Schema::dropIfExists('baskets');
    }
}
