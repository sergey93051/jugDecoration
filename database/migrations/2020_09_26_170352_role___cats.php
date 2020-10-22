<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleCats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RoleCats', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('cate_id');
            $t->unsignedBigInteger('prod_id');
            $t->foreign('cate_id')->references('id')->on('Category')->onDelete('cascade');
            $t->foreign('prod_id')->references('id')->on('productimgs')->onDelete('cascade');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RoleCats');
    }
}
