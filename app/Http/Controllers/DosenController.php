<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dosen;
class DosenController extends Controller
{
    public function getDosen(){
        $data= Dosen::where('id','')->get();
        return [$data];
    }

    public function getAllDosen(){

        return Dosen::all();
    }
}

