<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index('product_details_product_id_foreign');
            $table->string('product_code')->index('product_code');
            $table->string('details')->nullable()->index('details');
            $table->unsignedInteger('category_id')->index('product_details_category_id_foreign');
            $table->integer('stock_unit')->index('stock_unit');
            $table->double('price', 8, 2)->index('price');
            $table->double('discount', 8, 2)->nullable()->default(0.00)->index('discount');
            $table->date('discount_start')->nullable()->index('discount_start');
            $table->date('discount_end')->nullable()->index('discount_end');
            $table->unsignedInteger('price_type_id')->index('price_type_id');
            $table->boolean('is_featured')->nullable()->default(0);
            $table->tinyInteger('is_active')->nullable()->default(0);
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
        Schema::dropIfExists('product_details');
    }
}
