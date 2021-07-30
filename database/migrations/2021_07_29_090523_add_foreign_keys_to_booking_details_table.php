<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_details', function (Blueprint $table) {
            $table->foreign('booking_id', 'booking_details_ibfk_1')->references('id')->on('bookings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('service_id', 'booking_details_ibfk_2')->references('id')->on('services')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_details', function (Blueprint $table) {
            $table->dropForeign('booking_details_ibfk_1');
            $table->dropForeign('booking_details_ibfk_2');
        });
    }
}
