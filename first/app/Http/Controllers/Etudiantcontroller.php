<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiantcontroller extends Controller
{
    public function index(){
        $etudiants = \DB::select("SELECT * FROM etudiants");
        return view('etudiant', compact('etudiants'));
    }
    public function store(Request $request){
        \DB::table('etudiants')->insert([
            'nom'=>$request->nom,
            'age'=>$request->age
        ]);
    }


    public function edit($id){
        $data=\DB::select("SELECT * FROM etudiants WHERE id=?",[$id]);
        $etudiant=$data[0];
        return view('edit_etudiant',\compact('etudiant'));

    }
    public function update(Request $request){
   
    \DB::update('UPDATE etudiants SET nom = ?, age = ? WHERE id = ?',[$request->nom,$request->age,$request->id]);
       
    }
    
}
