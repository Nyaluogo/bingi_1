<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCritiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critiques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('critic');
            $table->integer('artist');
            $table->string('ip')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->integer('post_id');
            $table->text('critique')->nullable();
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
        Schema::dropIfExists('critiques');
    }
}
