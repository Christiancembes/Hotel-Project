<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelDetailTransaksi4 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->dropPrimary(['id_transaksi']);
            $table->renameColumn('id_transaksi', 'transaksi_id');
            $table->primary(['transaksi_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_detail_transaksi', function($table)
        {
            $table->dropPrimary(['transaksi_id']);
            $table->renameColumn('transaksi_id', 'id_transaksi');
            $table->primary(['id_transaksi']);
        });
    }
}
