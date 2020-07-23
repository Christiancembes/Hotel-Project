<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelDetailTransaksi6 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->increments('transaksi_id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->increments('transaksi_id')->unsigned()->change();
        });
    }
}
