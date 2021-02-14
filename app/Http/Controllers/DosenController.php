<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dosen;
class DosenController extends Controller
{
    public function getDosen(){
        $data= Dosen::where('nama','LIKE','%Hetty%')->get();
        return [$data];
    }
}
