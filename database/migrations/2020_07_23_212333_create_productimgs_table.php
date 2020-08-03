<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductimgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productimgs', function (Blueprint $table) {
            $table->id();
            $table->string("directory",190);
            $table->string("img",190);
            $table->string("img_2",190)->nullable();
            $table->string("img_3",190)->nullable();
            $table->string("title",80);
            $table->string("after",80);
            $table->text("text");
            $table->string("price",50);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('productimgs');
    }
    //php artisan migrate:rollback --step=6

}
