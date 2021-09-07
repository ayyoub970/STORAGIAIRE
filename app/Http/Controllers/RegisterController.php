<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterController extends Controller
{
    //

   public function aaaa(){

   
    $xxx = DB::table('stagiaires')->get();
    return view('registers.index')->with(array('xxx'=>$xxx));
}
public function index(){
  
    
    $xxx = DB::table('stagiaires')->get();
    return view('registers.index')->with(array('xxx'=>$xxx));
}
   
    function registerss(Request $request){

        $request->validate(['stagiaireid'=> 'required']);
        
        $id=$request->stagiaireid;
        $user = User::where('stagiaire_id', '=',$id )->first();
    if ($user === null) {
        
        $xxx = DB::table('stagiaires')->where('id',$id)->get();
    return view('registers.index')->with(array('yyy'=>$xxx));}
    else{
        return back()->with('success','Ce stagiaire a déja un compte utilisateur');
    }

   
}


function check(Request $request)
{
 if($request->get('nom_utilisateur'))
 {
  $nom_utilisateur = $request->get('nom_utilisateur');
  $data = DB::table("users")
   ->where('nom_utilisateur', $nom_utilisateur)
   ->count();
  if($data > 0)
  {
   echo 'not_unique';
  }
  else
  {
   echo 'unique';
  }
 }

}
    
       


public function store(Request $request){

    $id=$request->nom;
    $xxx = DB::table('stagiaires')->where('id',$id)->get();
   // return view('registers')->with(array('yyy'=>$xxx));
}
public function show(Request $request){

    $id=$request->nom;
    $xxx = DB::table('stagiaires')->where('id',$id)->get();
    return view('registers.index')->with(array('yyy'=>$xxx));
}

public function update(Request $request){

    $id=$request->nom;
    $xxx = DB::table('stagiaires')->where('id',$id)->get();
   // return view('registers')->with(array('yyy'=>$xxx));
}


}
