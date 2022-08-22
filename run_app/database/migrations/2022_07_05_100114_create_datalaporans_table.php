<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatalaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datalaporans', function (Blueprint $table) {
            $table->id();
            $table->char('name_kantor');
            $table->char('jenis_program');
            $table->char('jenis_transaksi');
            $table->char('jumlah_transaksi');
            $table->char('status');
            $table->char('email');
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
        Schema::dropIfExists('datalaporans');
    }
}
