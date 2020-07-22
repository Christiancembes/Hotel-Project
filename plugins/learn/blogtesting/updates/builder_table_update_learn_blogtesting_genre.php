<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingGenre extends Migration
{
    public function up()
    {
        Schema::rename('learn_blogtesting_string', 'learn_blogtesting_genre');
    }
    
    public function down()
    {
        Schema::rename('learn_blogtesting_genre', 'learn_blogtesting_string');
    }
}
