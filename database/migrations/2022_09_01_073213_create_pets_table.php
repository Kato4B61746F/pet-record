<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');    
            $table->integer('age');
            // $table->integer('category_id')->unsigned();
            $table->string('category_name');
            // 画像のパスを保存するカラムを追加
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void>
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
