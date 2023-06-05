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
        Schema::create('crews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('profiles_id');
            $table->foreign('profiles_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->string('nomor_id_kru')->nullable();
            $table->string('nama_kru')->nullable();
            $table->string('foto_kru')->nullable()->default('/crew-images/default.jpg');
            $table->string('alamat_kru')->nullable();
            $table->string('nomor_wa_kru')->nullable();
            $table->string('email_kru')->nullable();
            $table->string('jabatan_kru')->nullable();
            $table->string('keahlian_kru')->nullable();
            $table->string('status_kru')->nullable();
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
        Schema::dropIfExists('crews');
    }
};
