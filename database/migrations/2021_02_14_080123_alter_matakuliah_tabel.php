<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMatakuliahTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matakuliah_tabel',function(Blueprint $table)
        {
            $table->string('nama_mata_kuliah');
            $table->tinyInteger('sks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matakuliah_tabel', function (Blueprint $table)
        {
            $table->dropColumn('nama_mata_kuliah');
            $table->dropColumn('sks');
        });
    }
}
