<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelTransaksi8 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->renameColumn('id_transaksi', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->renameColumn('id', 'id_transaksi');
        });
    }
}
