<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnBlogtestingTestingGenre extends Migration
{
    public function up()
    {
        Schema::create('learn_blogtesting_testing_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('testing_id');
            $table->integer('genre_id');
            $table->primary(['testing_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_blogtesting_testing_genre');
    }
}
