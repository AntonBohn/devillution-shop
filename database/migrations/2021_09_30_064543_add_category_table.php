<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @param
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->string('name');
          $table->string('image');
          $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
