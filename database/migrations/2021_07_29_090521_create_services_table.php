<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('service_code')->unique('products_pcode_unique');
            $table->string('service_detail');
            $table->string('service_img');
            $table->unsignedInteger('store_id')->nullable()->index('store_id');
            $table->unsignedInteger('category_id')->index('category_id');
            $table->unsignedInteger('price_type_id')->nullable()->index('price_type_id');
            $table->integer('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
