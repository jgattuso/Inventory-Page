<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('macID');
            $table->string('area');
            $table->string('beacon');
            $table->string('tenant');
            $table->string('protocol');
            $table->string('uuid');
            $table->string('minor');
            $table->string('major');
            $table->string('identifier');
            $table->string('category');
            $table->string('quantity');
            $table->string('scan');
            $table->string('email');
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
        Schema::dropIfExists('items');
    }
}
