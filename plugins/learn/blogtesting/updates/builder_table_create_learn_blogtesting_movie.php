<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtestingMovie extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_movie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_movie');
    }
}
