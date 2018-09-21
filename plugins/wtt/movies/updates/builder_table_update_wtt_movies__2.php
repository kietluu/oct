<?php namespace wtt\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWttMovies2 extends Migration
{
    public function up()
    {
        Schema::table('wtt_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('wtt_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
