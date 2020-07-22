<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnHotelKamars extends Migration
{
    public function up()
    {
        Schema::create('learn_hotel_kamars', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('type_kmr');
            $table->decimal('hrg', 10, 0);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_hotel_kamars');
    }
}
