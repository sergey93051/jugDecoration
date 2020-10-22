<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Liketot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liketot', function (Blueprint $t) {
            $t->id();
            $t->string("tottle", 250);
            $t->unsignedBigInteger('prod_id');
            $t->foreign('prod_id')->references('id')->on('productimgs')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Liketot');
    }
}
