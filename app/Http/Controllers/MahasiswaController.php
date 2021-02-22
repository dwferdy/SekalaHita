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

    public function UpdateMahasiswa(){

        $mahasiswa = Mahasiswa::find(2);

        $mahasiswa->nama = 'Hoheng';
        $mahasiswa->save();
    }

    public function UpdateMahasiswa1(){

        $mahasiswa = Mahasiswa::where ('id', 2)
        ->update(
            [
                'nama'=>'Cok'
            ]
            );

            return $mahasiswa;
    }

    public function DeleteMahasiswa(){
        
        DB::table('mahasiswa_tabel')->where('id', 1)
        ->delete();
    }

    //eloquent

    public function DeleteMahasiswa1(){

        $mahasiswa = Mahasiswa::find(3);
        $mahasiswa->delete();

        return $mahasiswa;
    }
    

}