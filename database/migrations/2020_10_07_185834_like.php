<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Like extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Like', function (Blueprint $t) {
            $t->id();
            $t->string("like", 250);
            $t->unsignedBigInteger('user_id');
            $t->unsignedBigInteger('prod_id');
            $t->foreign('user_id')->references('id')->on('Users')->onDelete("cascade");
            $t->foreign('prod_id')->references('id')->on('productimgs')->onDelete("cascade");
            $t->string("tottle");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Like');
    }
}
