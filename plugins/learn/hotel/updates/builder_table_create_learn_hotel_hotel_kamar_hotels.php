<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnHotelHotelKamarHotels extends Migration
{
    public function up()
    {
        Schema::create('learn_hotel_hotel_kamar_hotels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('hotel_id');
            $table->integer('kamar_id');
            $table->primary(['hotel_id','kamar_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_hotel_hotel_kamar_hotels');
    }
}
