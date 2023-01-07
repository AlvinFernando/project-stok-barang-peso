<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryOrderBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_order_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('do_id');
            $table->text('description');
            $table->integer('qty');
            $table->enum('unit', ['Koli', 'Dos', 'Pcs', 'Box', 'Btl', 'Lembar']);
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
        Schema::dropIfExists('delivery_order_barang');
    }
}
