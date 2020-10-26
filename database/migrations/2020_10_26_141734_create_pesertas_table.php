<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//ganti nama tabel tanpa s dibelakang
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
// tambah kolom
            $table->string('nama', 100)->nullable();
            $table->enum('gender', ['L', 'P'])->default('L');
            $table->unsignedBigInteger('jurusan_id');
            $table->string('asalsekolah', 30)->nullable();
            $table->string('tempatlahir', 30)->nullable();
            $table->date('tanggallahir')->nullable();
            $table->timestamps();
// Jadikan berikan FK (Foreign Key)
            $table->foreign('jurusan_id')
                  ->references('id')->on('jurusan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
// ketika rollback kembalikan semua
        Schema::dropIfExists('peserta');
        Schema::table('peserta', function (Blueprint $table) {
            $table->dropForeign('peserta_jurusan_id_foreign');
        });
    }
}