<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStoreImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store_images', function (Blueprint $table) {
            $table->foreign('store_id', 'store_images_ibfk_1')->references('id')->on('stores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_images', function (Blueprint $table) {
            $table->dropForeign('store_images_ibfk_1');
        });
    }
}
