<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingTestingGenres2 extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_testing_genres', function($table)
        {
            $table->dropPrimary(['testing_id','genre_id']);
            $table->renameColumn('testing_id', 'blogtesting_id');
            $table->primary(['blogtesting_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_testing_genres', function($table)
        {
            $table->dropPrimary(['blogtesting_id','genre_id']);
            $table->renameColumn('blogtesting_id', 'testing_id');
            $table->primary(['testing_id','genre_id']);
        });
    }
}
