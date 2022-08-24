<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatatunaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatunais', function (Blueprint $table) {
            $table->id();
            $table->char('name_muz');
            $table->char('name_program');
            $table->char('tanggal_transaksi');
            $table->char('jumlah_transaksi');
            $table->char('status');
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
        Schema::dropIfExists('datatunais');
    }
}
