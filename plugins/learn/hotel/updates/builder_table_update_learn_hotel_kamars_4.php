<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelKamars4 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->default('null')->change();
            $table->string('hrg', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->default('NULL')->change();
            $table->string('hrg', 191)->default('\'null\'')->change();
        });
    }
}
