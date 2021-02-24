<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;
use App\Models\Dosen;
class MahasiswaController extends Controller
{
    //Mengambil semua data mahasiswa
    public function getAllMahasiswa(){

        return Mahasiswa::all();
    }
    public function getMahasiswa5(){
        $data= Mahasiswa::select('*')
        ->limit (5)
        ->get();
        return [$data];
    }

    public function createMahasiswa(){
        $data = Mahasiswa::create(
            [
                'nama'=>'Ferdy',
                'NIM'=>'177172',
            ]
            
            );
            return $data;
    }

    
   

    public function DeleteMahasiswa(){
        
        Mahasiswa::table('mahasiswa_tabel')->where('id', 1)
        ->delete();
    }

    //eloquent

    public function DeleteMahasiswa1(){

        $mahasiswa = Mahasiswa::find(3);
        $mahasiswa->delete();

        return $mahasiswa;
    }
    

    public function UpdateMahasiswa1(){

        $mahasiswa = Mahasiswa::where ('id', 3)
        ->update(
            [
                'nama'=>'Santi'
            ]
            );

            return $mahasiswa;
    }



    //1 dosen dimiliki banyak mahasiswa 1-m
    
    public function DosenPembimbing(){

        $dosbim = Dosen::find(3)->DosBim()->get();
        return $dosbim;
    }


}