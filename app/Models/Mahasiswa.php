<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='mahasiswa_tabel';
    protected $primaryKey ='id';
    protected $fillable = ['nama','NIM','dosen_id'];

    public function MatkulMahasiswa(){

        return $this->belongsToMany(Matakuliah::class,'mahasiswa_matkul_tabel' ,'mahasiswa_id', 'mata_kuliah_id');
    }


}
