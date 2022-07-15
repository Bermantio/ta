<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatalazismusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datalazismus', function (Blueprint $table) {
            $table->id();
            $table->char('kode_kantor');
            $table->char('name_kantor');
            $table->char('name_pimpinan');
            $table->char('alamat');
            $table->char('notelp');
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
        Schema::dropIfExists('datalazismus');
    }
}
