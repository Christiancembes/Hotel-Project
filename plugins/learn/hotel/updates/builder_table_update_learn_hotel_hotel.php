<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotel extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->text('nama_hotel')->default('null')->change();
            $table->text('alamat')->default('null')->change();
            $table->text('kota')->default('null')->change();
            $table->text('negara')->default('null')->change();
            $table->text('type_hotel')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('nama_hotel')->default('NULL')->change();
            $table->text('alamat')->default('NULL')->change();
            $table->text('kota')->default('NULL')->change();
            $table->text('negara')->default('NULL')->change();
            $table->text('type_hotel')->default('NULL')->change();
        });
    }
}
