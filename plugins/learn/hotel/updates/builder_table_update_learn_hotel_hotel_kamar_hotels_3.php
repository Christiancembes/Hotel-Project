<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelKamarHotels3 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_kamar_hotels', function($table)
        {
            $table->dropPrimary(['hotel_id','kamar_id']);
            $table->renameColumn('hotel_id', 'hotel_hotel_id');
            $table->primary(['hotel_hotel_id','kamar_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_kamar_hotels', function($table)
        {
            $table->dropPrimary(['hotel_hotel_id','kamar_id']);
            $table->renameColumn('hotel_hotel_id', 'hotel_id');
            $table->primary(['hotel_id','kamar_id']);
        });
    }
}
