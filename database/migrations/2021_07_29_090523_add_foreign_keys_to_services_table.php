<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->foreign('category_id', 'services_ibfk_1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('store_id', 'services_ibfk_2')->references('id')->on('stores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('price_type_id', 'services_ibfk_3')->references('id')->on('pricing_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign('services_ibfk_1');
            $table->dropForeign('services_ibfk_2');
            $table->dropForeign('services_ibfk_3');
        });
    }
}
