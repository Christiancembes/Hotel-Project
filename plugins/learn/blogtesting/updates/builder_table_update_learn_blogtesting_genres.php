<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingGenres extends Migration
{
    public function up()
    {
        Schema::rename('learn_blogtesting_genre', 'learn_blogtesting_genres');
        Schema::table('learn_blogtesting_genres', function($table)
        {
            $table->renameColumn('genre', 'genre_title');
        });
    }
    
    public function down()
    {
        Schema::rename('learn_blogtesting_genres', 'learn_blogtesting_genre');
        Schema::table('learn_blogtesting_genre', function($table)
        {
            $table->renameColumn('genre_title', 'genre');
        });
    }
}
