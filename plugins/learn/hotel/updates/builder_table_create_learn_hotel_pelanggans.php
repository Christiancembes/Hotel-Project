<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnHotelPelanggans extends Migration
{
    public function up()
    {
        Schema::create('learn_hotel_pelanggans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('nik')->nullable();
            $table->text('nama_pelanggan')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->string('umur')->nullable();
            $table->text('domisili')->nullable();
            $table->string('jml_tamu')->nullable();
            $table->string('no_tlp', 12)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_hotel_pelanggans');
    }
}
