<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('regionals_id');
            $table->foreign('regionals_id')->references('id')->on('regionals')->onDelete('cascade');
            $table->string('nama_pesantren')->nullable();
            $table->string('nama_pengasuh')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->integer('jumlah_kru')->nullable();
            $table->string('nama_pendaftar')->nullable();
            $table->string('jabatan_pendaftar')->nullable();
            $table->string('nomor_wa')->nullable();
            $table->string('nama_media')->nullable();
            $table->string('nomor_telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('website')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_website')->nullable();
            $table->string('link_map')->nullable();
            $table->string('logo_ponpes')->nullable();
            $table->string('logo_media')->nullable();
            $table->string('foto_gedung')->nullable();
            $table->string('foto_pengasuh')->nullable();
            $table->string('foto_kegiatan')->nullable();
            $table->string('sejarah_pesantren',500)->nullable();
            $table->string('quote_pengasuh')->nullable();
            $table->string('link_audio_dawuh')->nullable();
            $table->string('jumlah_santri')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
