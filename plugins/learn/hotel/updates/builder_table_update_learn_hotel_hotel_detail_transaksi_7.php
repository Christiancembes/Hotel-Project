<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelDetailTransaksi7 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->dropPrimary(['transaksi_id']);
            $table->primary(['transaksi_id','hotel_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->dropPrimary(['transaksi_id','hotel_id']);
            $table->primary(['transaksi_id']);
        });
    }
}
