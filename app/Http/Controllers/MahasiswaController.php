<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;

class MahasiswaController extends Controller
{   

    public function attachMatkul(){

        return Mahasiswa::find(5)->MatkulMahasiswa()->attach([1,2,3,4]);
    }

    public function detachMatkul(){

        //get mahasiswa 1,2,3

        $mahasiswa = Mahasiswa::where('id',4)->orWhere('id',5)->get();
        $mahasiswa = Mahasiswa::whereIn ('id',[4,5])->get();

        //iterasi mahasiswa dalam array

        for($i= 0;$i < count($mahasiswa); $i++){

            $mahasiswa[$i]->MatkulMahasiswa()->detach([4,5]);
        }
    }
    
    public function syncMatkul(){

        //pertama get dulu semua matkul dari mahasiswa tabel

        $mata_kuliah = Mahasiswa::find(1)->MatkulMahasiswa()->get();
        $id_matkul = [];

    }
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
    

    public function GetMatkul(){

        return Mahasiswa::find(4)->MatkulMahasiswa()->get();
    }


    public function form(){

        $data = Mahasiswa::all();
        return view ('form', compact('data'));
    }

}