<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingTestingGenres extends Migration
{
    public function up()
    {
        Schema::rename('learn_blogtesting_testing_genre', 'learn_blogtesting_testing_genres');
    }
    
    public function down()
    {
        Schema::rename('learn_blogtesting_testing_genres', 'learn_blogtesting_testing_genre');
    }
}
