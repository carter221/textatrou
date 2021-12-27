<?php

namespace App\Http\Controllers;

use App\Models\Exercices;
use Illuminate\Http\Request;

class EleveController extends Controller
{
   public function index(){
     $exos = Exercices::all();
       return view('index_eleve', compact('exos'));
      //dd($exos);
   }
   

   public function show(){
      
   }
}
