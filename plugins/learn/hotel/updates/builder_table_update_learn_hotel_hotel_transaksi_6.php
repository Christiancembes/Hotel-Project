<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelTransaksi6 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->dropPrimary(['id']);
            $table->renameColumn('id', 'id_transaksi');
            $table->primary(['id_transaksi']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->dropPrimary(['id_transaksi']);
            $table->renameColumn('id_transaksi', 'id');
            $table->primary(['id']);
        });
    }
}
