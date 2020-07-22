<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtestingString extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_string', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_string');
    }
}
