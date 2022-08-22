<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatausersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datausers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->char('kode_user');
            $table->char('name_user');
            $table->char('nama_lengkap');
            $table->char('jenis_kelamin');
            $table->char('alamat');
            $table->char('email');
            $table->char('notelp');
            $table->char('profesi');
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
        Schema::dropIfExists('datausers');
    }
}
