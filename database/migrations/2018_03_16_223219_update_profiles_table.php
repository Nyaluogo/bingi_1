<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('profiles', function($table)
        {
          $table->string('address_1')->nullable();
          $table->string('address_2')->nullable();
          $table->string('region')->nullable();
          $table->string('postal_code')->nullable();
          
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
        Schema::table('profiles', function($table) {
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('region');
            $table->dropColumn('postal_code');
            
         });
    }
}
