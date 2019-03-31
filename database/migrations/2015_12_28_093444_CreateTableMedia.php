<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function(Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('ringkasan_judul');
            $table->longText('ringkasan');
            $table->longText('ringkasan_deskripsi');
            $table->longText('deskripsi');
            $table->string('kategori');
            $table->string('sumber');
            $table->string('gambar');
            $table->string('nama');
            $table->string('skpd');
            $table->string('bidang');
            $table->string('jabatan');
            $table->string('profile');
            $table->string('nilai_isi');
            $table->string('nilai_informatif');
            $table->string('nilai_penyajian');
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
        Schema::drop('media');
    }
}
