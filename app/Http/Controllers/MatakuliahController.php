<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Matakuliah;
use App\Models\Jadwal;
class MatakuliahController extends Controller
{
    public function getAllMatakuliah(){

        return Matakuliah::all();
    }

    public function getMatakuliah(){

        $data= Matakuliah::select('nama_mata_kuliah')->get();
        return [$data];
    }

    public function createMatakuliah()
    {
        $matakuliah = new Matakuliah;
        $matakuliah-> nama_mata_kuliah = 'Php';
        $matakuliah-> sks = '4';
        $matakuliah->save();
        return $matakuliah;
    }

    public function matkuljadwal(){

        $matkul = Matakuliah::find(2)->jadwal()->get();
        return $matkul;
    }

    public function matkuljadwal1(){

        $jadwal = Jadwal::find(2)->MataKuliah()->get();
        return $jadwal;
    }

    public function attachMahasiswa(){

        return Matakuliah::find(4)->MatkulMahasiswa()->attach([3,4]);
    }

    public function detachMahasiswa(){

        return Matakuliah::find(4)->MatkulMahasiswa()->detach();
    }

    
}
