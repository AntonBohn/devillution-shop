<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriesToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('mouse')->default(null)->nullable(true);
            $table->string('keyboard')->default(null)->nullable(true);
            $table->string('mouse pad')->default(null)->nullable(true);
            $table->string('monitor')->default(null)->nullable(true);
            $table->string('headset')->default(null)->nullable(true);
            $table->string('lighting')->default(null)->nullable(true);
            $table->string('table')->default(null)->nullable(true);
            $table->string('chair')->default(null)->nullable(true);
            $table->string('micro')->default(null)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_new_categories');
    }
}
