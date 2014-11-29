<?php namespace Responsiv\Zephyr\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostStatusesTable extends Migration
{

    public function up()
    {
        Schema::create('responsiv_zephyr_post_statuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsiv_zephyr_post_statuses');
    }

}
