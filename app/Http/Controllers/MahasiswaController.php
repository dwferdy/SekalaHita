<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    //Mengambil semua data mahasiswa
    public function getAllMahasiswa(){

        return Mahasiswa::all();
    }
    public function getMahasiswa5(){
        $data= Mahasiswa::where('id','<', 6)->get();
        return [$data];
    }

}