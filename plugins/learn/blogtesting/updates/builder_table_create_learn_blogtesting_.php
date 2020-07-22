<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtesting extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('keterangan');
            $table->date('tanggal');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_');
    }
}
