<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen_tabel';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','NIK','age','adress','dosen_id'];

    

    public function DosBim(){

        return $this->hasMany(Mahasiswa::class, 'dosen_id');
    }
}
