<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('reason_for_joining')->nullable();
            $table->date('DOB')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->string('fav_visual_artist')->nullable();
            $table->string('fav_movies')->nullable();
            $table->string('fav_music')->nullable();
            $table->string('fav_books')->nullable();
            $table->string('biography')->nullable();
            $table->macAddress('device')->nullable();
            $table->string('type_of_artist')->nullable();
            $table->string('area_of_specialty')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
