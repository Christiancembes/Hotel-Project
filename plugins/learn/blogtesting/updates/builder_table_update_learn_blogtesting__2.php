<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtesting2 extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
