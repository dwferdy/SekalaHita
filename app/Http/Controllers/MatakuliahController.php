<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Matakuliah;
class MatakuliahController extends Controller
{
    public function getAllMatakuliah(){

        return Matakuliah::all();
    }

    public function getMatakuliah(){

        $data= Matakuliah::select('nama_mata_kuliah')->get();
        return [$data];
    }

}
