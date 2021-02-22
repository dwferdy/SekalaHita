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

    public function InsertDosen(){
        $data= DB::table('dosen_tabel')->insert([
          'nama'=>'Guru', 
          'adress'=>'Test', 
          'age'=>'17',
          'NIK'=>17170981

        ]);
        return $data;
    }

    public function CreateDosen(){
        $data= DB::table('dosen_tabel')->insert([
            [
                'nama'=>'Heloo', 
          'adress'=>'Test', 
          'age'=>'17',
          'NIK'=>17170981
            ],

            [
                'nama'=>'Ali', 
                'adress'=>'Test', 
                'age'=>'17',
                'NIK'=>17170981
            ]
            

         
        ]);
            }
        public function updateDosen(){
            $dosen = DB::table('dosen_tabel')
                        ->where('id',1)
                        ->update(['nama'=> 'Test']);
        }

        
    }

