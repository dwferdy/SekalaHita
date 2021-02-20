<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dosen;
class DosenController extends Controller
{


    public function getAllDosen(){

        return Dosen::all();
    }


    public function getDosenId($id){
        $data= Dosen::where('id', $id)->get();
        return [$data];
    }
}

