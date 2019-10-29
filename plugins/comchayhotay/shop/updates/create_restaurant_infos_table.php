<?php namespace Comchayhotay\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRestaurantInfosTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('open_time');
            $table->string('email');
            $table->string('facebook');
            $table->string('zalo');
            $table->string('address');
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_infos');
    }
}
