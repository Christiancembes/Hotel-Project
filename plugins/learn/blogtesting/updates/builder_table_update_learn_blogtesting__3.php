<?php namespace Learn\Blogtesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnBlogtesting3 extends Migration
{
    public function up()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->text('keterangan')->nullable(false)->unsigned(false)->default('\'\'')->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_blogtesting_', function($table)
        {
            $table->string('keterangan', 50)->nullable(false)->unsigned(false)->default('\'\'')->change();
        });
    }
}
