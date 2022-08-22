<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamuzakkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamuzakkis', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->char('kode_muzakki');
            //$table->char('name_user');
            $table->char('name_muzakki');
            //$table->char('jenis_kelamin');
            $table->char('alamat');
            //$table->char('profesi');
            //$table->char('tanggal_dibuat');
           // $table->char('keterangan');
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
        Schema::dropIfExists('datamuzakkis');
    }
}
