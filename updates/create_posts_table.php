<?php namespace Responsiv\Zephyr\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('responsiv_zephyr_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->text('details')->nullable();
            $table->string('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zip', 20)->nullable();
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsiv_zephyr_posts');
    }

}
