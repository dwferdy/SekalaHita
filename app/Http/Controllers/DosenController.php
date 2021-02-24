<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dosen;
use DB;
class DosenController extends Controller
{


    public function getAllDosen(){

        return Dosen::all();
    }


    public function getDosenId($id){
        $data= Dosen::where('id', $id)->get();
        return [$data];
    }

    

    public function CreateDosen(){
        $data= Dosen::table('dosen_tabel')->insert([
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
            $dosen = Dosen::table('dosen_tabel')
                        ->where('id',1)
                        ->update(['nama'=> 'Test']);
        }

        public function CreateDosen1()
    {
        $dosen = new Dosen();
        $dosen-> nama = 'Setyoooo';
        $dosen-> adress = 'Jl. Mukti';
        $dosen-> NIK = '47678566';
        $dosen-> age = '44';
        $dosen->save();
        return $dosen;
    }
        
    }

