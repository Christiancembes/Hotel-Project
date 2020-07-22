<?php namespace Learn\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnHotelHotelTransaksi4 extends Migration
{
    public function up()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->dropPrimary(['id_transaksi','hotel_id']);
            $table->text('nama_hotel');
            $table->text('nama_pegawai');
            $table->text('nama_pelanggan');
            $table->text('type_kmr');
            $table->string('hrg');
            $table->dateTime('tgl_msk');
            $table->dateTime('tgl_klr');
            $table->string('total');
            $table->string('jml_kmr')->change();
            $table->string('durasi')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('hotel_id');
            $table->dropColumn('pelanggan_id');
            $table->dropColumn('pegawai_id');
            $table->dropColumn('kamar_id');
            $table->dropColumn('tgl_masuk');
            $table->dropColumn('tgl_keluar');
            $table->dropColumn('total_harga');
            $table->primary(['id_transaksi']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_hotel_hotel_transaksi', function($table)
        {
            $table->dropPrimary(['id_transaksi']);
            $table->dropColumn('nama_hotel');
            $table->dropColumn('nama_pegawai');
            $table->dropColumn('nama_pelanggan');
            $table->dropColumn('type_kmr');
            $table->dropColumn('hrg');
            $table->dropColumn('tgl_msk');
            $table->dropColumn('tgl_klr');
            $table->dropColumn('total');
            $table->string('jml_kmr', 191)->change();
            $table->integer('durasi')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('hotel_id');
            $table->integer('pelanggan_id');
            $table->integer('pegawai_id');
            $table->integer('kamar_id');
            $table->dateTime('tgl_masuk');
            $table->dateTime('tgl_keluar');
            $table->decimal('total_harga', 10, 0);
            $table->primary(['id_transaksi','hotel_id']);
        });
    }
}
