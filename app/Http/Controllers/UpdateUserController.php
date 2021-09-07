<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request; 


class UpdateUserController extends Controller
{
   //
   public function __construct()
   {
       $this->middleware('auth');}
   //
 public function edit(User $user){
return view('updateuser',compact('user'))
 ;
 }
   public function update(Request $request,User $user)
   {
       $request->validate([
          'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cin' => ['required', 'string', 'min:5', 'max:8','unique:users'],
            'nom_utilisateur' => ['required', 'string', 'max:16', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);

       $user->update($request->all());

       return redirect()->route('liststg')
       ->with('success','utilisateur mis a jour');
    }    }  
  