<?php
  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Annonce;
use App\Models\Annoncepieces;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $annonces = DB::table('users')
        ->join('annonces','users.id',"=",'annonces.user_id')
        ->get()->reverse();

     return view('annonces.index',compact('annonces'));
           
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annonces = Auth::user()->id;

        return view('annonces.create',compact('annonces'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Annonce $annonce)
    {
        $request->validate([
           
            'type'=> 'required',
             'annonce'=> 'required',
              'user_id'=> 'required',
              'etat'=> 'required',
            
        ]);
            
       
     
        Annonce::create($request->all());
     
     
     
        return redirect()->route('annonces.index')
                        ->with('success','Annonce created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    
    {
        
        $xxx = DB::table('users')
        ->join('annonces','users.id',"=",'annonces.user_id')
        ->select('users.nom')
        ->where('annonces.id',$annonce->id)
        
        ->get();
        return view('annonces.show',compact('annonce'))->with(array('xxx'=>$xxx));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
      
        
        return view('annonces.edit',compact('annonce'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
       
        $request->validate([
            'annonce'=> 'required',
            'etat'=> 'required',
            'type'=> 'required',
             
      
        ]);
        
    
        $annonce->update($request->all());
    
        return redirect()->route('annonces.index')
                        ->with('success','Annonce updated successfully');
    }
    
 



     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
    
        return redirect()->route('annonces.index')
                        ->with('success','Annonce deleted successfully');
    }


    
   


}