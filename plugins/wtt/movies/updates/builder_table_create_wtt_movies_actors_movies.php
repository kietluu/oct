<?php namespace wtt\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWttMoviesActorsMovies extends Migration
{
    public function up()
    {
        Schema::create('wtt_movies_actors_movies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movies_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movies_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wtt_movies_actors_movies');
    }
}
