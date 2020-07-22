<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtestingActors2 extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('first_name');
            $table->text('last_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_actors');
    }
}
