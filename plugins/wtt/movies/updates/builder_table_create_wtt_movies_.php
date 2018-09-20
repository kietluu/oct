<?php namespace wtt\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWttMovies extends Migration
{
    public function up()
    {
        Schema::create('wtt_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('year');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wtt_movies_');
    }
}
