<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnHotel extends Migration
{
    public function up()
    {
        Schema::create('learn_hotel_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('nama_hotel')->nullable();
            $table->text('alamat')->nullable();
            $table->text('kota')->nullable();
            $table->text('negara')->nullable();
            $table->text('type_hotel')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_hotel_');
    }
}
