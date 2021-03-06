<?php namespace Responsiv\Zephyr\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('responsiv_zephyr_post_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsiv_zephyr_post_categories');
    }

}
