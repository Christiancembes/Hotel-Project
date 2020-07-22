<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLearnBlogtestingBlogtestingGenre extends Migration
{
    public function up()
    {
        Schema::dropIfExists('learn_blogtesting_blogtesting_genre');
    }
    
    public function down()
    {
        Schema::create('learn_blogtesting_blogtesting_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('blogtesting_id');
            $table->integer('genre_id');
        });
    }
}
