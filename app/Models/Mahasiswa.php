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
    protected $fillable = ['nama','NIM'];
}
