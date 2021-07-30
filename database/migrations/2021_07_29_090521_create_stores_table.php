<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name');
            $table->string('store_address');
            $table->string('store_address2')->nullable();
            $table->string('store_phone')->nullable();
            $table->string('owner_mobile');
            $table->unsignedInteger('owner_id')->index('stores_owner_id_foreign');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->integer('is_active')->default(0);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
