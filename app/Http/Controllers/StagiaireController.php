<?php
  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $stagiaires = Stagiaire::latest()->paginate();
      // $stagiaires = DB::table('stagiaires')->get();
        return view('stagiaires.index',compact('stagiaires'))
            ->with('i');
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stagiaires.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Stagiaire $stagiaire)
    {
        $request->validate([
           
            'nom'=> 'required',
             'cin'=> 'required',
             'sexe'=> 'required',
              'adresse'=> 'required',
              'tel'=> 'required', 
              'email'=> 'required',
            
        ]);
            
        Stagiaire::create($request->all());
     
        return redirect()->route('stagiaires.index')
                        ->with('success','Stagiaire created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('stagiaires.show',compact('stagiaire'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Stagiaire $stagiaire)
    {
        return view('stagiaires.edit',compact('stagiaire'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $request->validate([
            'nom'=> 'required',
             'cin'=> 'required',
             'sexe'=> 'required',
              'adresse'=> 'required',
              'tel'=> 'required', 
              'email'=> 'required',
        ]);
    
        $stagiaire->update($request->all());
    
        return redirect()->route('stagiaires.index')
                        ->with('success','Stagiaire updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
    
        return redirect()->route('stagiaires.index')
                        ->with('success','Stagiaire deleted successfully');
    }
}