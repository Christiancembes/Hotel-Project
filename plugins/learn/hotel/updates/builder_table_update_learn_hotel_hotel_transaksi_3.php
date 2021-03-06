<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelTransaksi3 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->primary(['id_transaksi','hotel_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->dropPrimary(['id_transaksi','hotel_id']);
        });
    }
}
