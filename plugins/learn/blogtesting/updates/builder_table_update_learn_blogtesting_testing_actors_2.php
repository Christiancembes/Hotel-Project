<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingTestingActors2 extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_testing_actors', function($table)
        {
            $table->renameColumn('actors_id', 'actor_id');
            $table->primary(['blogtesting_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_testing_actors', function($table)
        {
            $table->dropPrimary(['blogtesting_id','actor_id']);
            $table->renameColumn('actor_id', 'actors_id');
        });
    }
}
