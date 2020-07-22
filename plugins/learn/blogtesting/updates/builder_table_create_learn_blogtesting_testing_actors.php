<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtestingTestingActors extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_testing_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('testing_id');
            $table->integer('actor_id');
            $table->primary(['testing_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_testing_actors');
    }
}
