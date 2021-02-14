<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_tabel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adress');
            $table->string('nama');
            $table->integer('NIK');
            $table->integer('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_tabel');
    }
}
