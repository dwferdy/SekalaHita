<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMahasiswaTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_tabel',function(Blueprint $table)
        {
            $table->string('nama');
            $table->string('alamat');
            $table->integer('NIM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_tabel', function (Blueprint $table)
        {
            $table->dropColumn('nama');
            $table->dropColumn('alamat');
            $table->dropColumn('NIM');
        });
    }
}
