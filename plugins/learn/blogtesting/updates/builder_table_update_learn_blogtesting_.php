<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtesting extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->dateTime('tanggal')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->date('tanggal')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
