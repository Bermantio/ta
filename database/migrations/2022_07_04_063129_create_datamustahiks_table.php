<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamustahiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamustahiks', function (Blueprint $table) {
            $table->id();
            $table->char('kode');
            $table->char('name');
            $table->char('jenis_kelamin');
            $table->char('alamat');
            $table->char('profesi');
            $table->char('keterangan');
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
        Schema::dropIfExists('datamustahiks');
    }
}
