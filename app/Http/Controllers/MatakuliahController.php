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

        $data= Matakuliah::where('nama')->get();
        return [$data];
    }

}
