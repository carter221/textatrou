<?php

namespace App\Http\Controllers;

use App\Models\Exercices;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
       Exercices::create([
           'nom'=> $request->exoName,
           'questions' => $request ->quiz,
           'reponse' => $request->answer,
           'mot_caché'=>'je suis la '
       ]);
       return view('index');
       
    }

    
}
