<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use HasFactory;

    protected $table ='jadwal_tabel';
    protected $primaryKey ='id';
    protected $fillable = ['hari','mata_kuliah_id'];

    public function MataKuliah(){

        return $this->belongsTo(Matakuliah::class, 'mata_kuliah_id');
    }

}
