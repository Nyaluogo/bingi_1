<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('posts', function($table)
        {
          $table->string('copyright_option')->nullable();
          $table->string('style')->nullable();
          $table->string('packaging')->nullable();
          $table->string('framing_options')->nullable();
          $table->string('multipanel_options')->nullable();
          $table->string('weight')->nullable();
          $table->string('original_sale_option')->nullable();
          $table->integer('print_price')->nullable();
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts', function($table) {
            $table->dropColumn('copyright_option');
            $table->dropColumn('style');
            $table->dropColumn('packaging');
            $table->dropColumn('framing_options');
            $table->dropColumn('multipanel_options');
            $table->dropColumn('weight');
            $table->dropColumn('original_sale_option');
            $table->dropColumn('print_price');
         });
    }
}
