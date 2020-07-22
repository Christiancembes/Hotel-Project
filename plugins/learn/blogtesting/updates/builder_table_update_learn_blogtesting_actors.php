<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtestingActors extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_actors', function($table)
        {
            $table->string('first_name', 65535)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('last_name', 65535)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_actors', function($table)
        {
            $table->text('first_name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('last_name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
