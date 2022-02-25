<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiantcontroller extends Controller
{
    public function index(){
        $etudiants = \DB::select("SELECT * FROM etudiants order by id DESC");
        return view('etudiant', compact('etudiants'));
    }
    public function store(Request $request){
        $request-> validate ([
            'nom'=>'required',
            'age'=>'required'
            // je veux que l'age ne depasse 50
            // 'age'=>'required max:50'
        ]);
        \DB::table('etudiants')->insert([
            'nom'=>$request->nom,
            'age'=>$request->age
        ]);
       
       // return back()->with('message','insertion avec succes');
    //    return\redirect()->route('etudiant')->with('message','insertion reussi  avec succes');
return response()->json([
    "message"=>"insertion avec succes"
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
    public function destroy($id
    ){
        \DB::delete("DELETE FROM etudiants WHERE id=?",[$id]);
        
        return redirect()->route('etudiant')->with('message','supression reussi  avec succes');
        //return view('etudiant');

    }
    
}
