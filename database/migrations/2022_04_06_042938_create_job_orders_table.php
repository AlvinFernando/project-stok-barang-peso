<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('customer');
            $table->string('jenis_order');
            $table->text('size');
            $table->unsignedBigInteger('barangs_id');
            $table->text('pages');
            $table->text('color');
            $table->integer('qty');
            $table->unsignedBigInteger('pegawais_id');
            $table->string('deadline');
            $table->string('sign');
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
        Schema::dropIfExists('job_orders');
    }
}
