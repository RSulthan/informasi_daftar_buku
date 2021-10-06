<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_bukus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penulis');
            $table->string('judul');
            $table->string('isi');
            $table->string('gambar');
            $table->integer('halaman');
            $table->timestamp('waktu_buat')->default(now());
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
        Schema::dropIfExists('informasi_bukus');
    }
}
