<?php namespace Comchayhotay\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('content');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
