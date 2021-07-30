<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders_details', function (Blueprint $table) {
            $table->foreign('order_id', 'orders_details_ibfk_1')->references('id')->on('orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('product_id', 'orders_details_ibfk_2')->references('id')->on('product_details')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_details', function (Blueprint $table) {
            $table->dropForeign('orders_details_ibfk_1');
            $table->dropForeign('orders_details_ibfk_2');
        });
    }
}
