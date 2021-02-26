<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table ='matakuliah_tabel';
    protected $primaryKey ='id';
    protected $fillable = ['nama_mata_kuliah','sks'];

    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'mata_kuliah_id');
    }

    public function MatkulMahasiswa(){

        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matkul_tabel' ,'mata_kuliah_id','mahasiswa_id');
    }
}
