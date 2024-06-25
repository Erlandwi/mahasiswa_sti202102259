<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswaa', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('nim');
            $table->unique('nim');
            $table->string('nama');
            $table->text('alamat');
            $table->varchar('email');
            $table->varchar('tempat_lahir');
            $table->varchar('tgl_lahir');
            $table->varchar('agama');
            $table->varchar('status');
            $table->string('foto');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswaa');
    }
}
