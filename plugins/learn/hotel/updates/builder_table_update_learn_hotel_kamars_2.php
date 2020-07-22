<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelKamars2 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->default('null')->change();
            $table->string('hrg')->nullable()->unsigned(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->default('NULL')->change();
            $table->integer('hrg')->nullable()->unsigned(false)->default(NULL)->change();
        });
    }
}
