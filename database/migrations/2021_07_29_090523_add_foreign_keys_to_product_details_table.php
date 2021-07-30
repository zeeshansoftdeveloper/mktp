<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('price_type_id', 'product_details_ibfk_2')->references('id')->on('pricing_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('product_id', 'product_details_ibfk_3')->references('id')->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('product_details_category_id_foreign');
            $table->dropForeign('product_details_ibfk_2');
            $table->dropForeign('product_details_ibfk_3');
        });
    }
}
