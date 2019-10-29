<?php namespace Comchayhotay\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('total_price');
            $table->integer('customer_info_id');
            $table->integer('ship_fee');
            $table->integer('status');
            $table->integer('payment_method');
            $table->dateTime('date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
