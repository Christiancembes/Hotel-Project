<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnHotelPegawais extends Migration
{
    public function up()
    {
        Schema::create('learn_hotel_pegawais', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('nama_pegawai')->nullable();
            $table->string('tempat_tanggal_lahir', 255)->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->string('umur')->nullable();
            $table->text('domisili')->nullable();
            $table->dateTime('tanggal')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_hotel_pegawais');
    }
}
