<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapenyaluransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenyalurans', function (Blueprint $table) {
            $table->id();
            $table->char('kode_transaksi');
            $table->char('tanggal_penyaluran');
            $table->char('name_program');
            $table->char('nama_mustahik');
            $table->char('jenis_kelamin');
            $table->char('alamat');
            $table->char('profesi');
            $table->char('jumlah_donasi');
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
        Schema::dropIfExists('datapenyalurans');
    }
}
