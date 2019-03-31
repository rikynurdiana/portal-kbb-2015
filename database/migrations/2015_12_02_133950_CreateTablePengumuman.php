<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumumen', function(Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('ringkasan_judul');
            $table->longText('deskripsi');
            $table->longText('ringkasan_deskripsi');
            $table->longText('ringkasan');
            $table->string('kategori');
            $table->string('gambar');
            $table->string('nama');
            $table->string('skpd');
            $table->string('bidang');
            $table->string('jabatan');
            $table->string('profile');
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
        Schema::drop('pengumumen');
    }
}
