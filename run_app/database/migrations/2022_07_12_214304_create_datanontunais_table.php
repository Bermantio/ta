<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatanontunaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datanontunais', function (Blueprint $table) {
            $table->id();
            $table->char('tanggal_transaksi');
            $table->char('name_zakki');
            $table->char('alamat');
            $table->char('notelepon');
            $table->char('profesi');
            $table->char('name_program');
            $table->char('keterangan');
            $table->char('berupa');
            $table->char('jumlah_transaksi');
            $table->char('image');
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
        Schema::dropIfExists('datanontunais');
    }
}
