<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create the posts table
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('path')->nullable();
            $table->string('thumb')->nullable();
            $table->string('image_extension', 10)->nullable();
            $table->string('image_name')->unique()->nullable();
            $table->string('is_active')->default(false)->nullable();
            $table->string('is_featured')->default(false)->nullable();
            $table->string('mobile_image_name')->unique()->nullable();
            $table->string('mobile_image_path')->nullable();
            $table->string('mobile_extension', 10)->nullable();
            $table->string('title')->default('untitled')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('print_options')->nullable();
            $table->integer('number_of_prints_for_sale')->nullable();
            $table->string('type_of_print')->nullable();
            $table->string('year_of_completion')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('medium')->nullable();
            $table->string('material')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('mature_content_type')->nullable();
            $table->string('comment_options')->nullable();
            $table->string('sharing_options')->nullable();
            $table->string('download_options')->nullable();
            $table->string('watermark_options')->nullable();
            $table->string('display_options')->nullable();
            $table->string('critique_options')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
