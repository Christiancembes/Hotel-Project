<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelKamars extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->nullable()->change();
            $table->decimal('hrg', 10, 0)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_kamars', function($table)
        {
            $table->text('type_kmr')->nullable(false)->change();
            $table->decimal('hrg', 10, 0)->nullable(false)->change();
        });
    }
}
