<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
// ganti nama tabel
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();
//tambah field (kolom)
            $table->string('jurusan', 50)->nullable();
            $table->unsignedInteger('kapasitas')->nullable();
            $table->unsignedInteger('terisi')->nullable();
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
// Ketika rollback tabel akan ikut di hapus
        Schema::dropIfExists('jurusan');
    }
}