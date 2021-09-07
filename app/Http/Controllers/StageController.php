<?php
  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Stage;
use App\Models\Stagepieces;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class StageController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = Stage::latest()->paginate();
        $xxx = DB::table('stagiaires')
        ->join('stages','stages.stagiaire_id',"=",'stagiaires.id')
  
     ->get();

     return view('stages.index',compact('stages'))->with(array('xxx'=>$xxx));
           
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stagiaires = Stagiaire::get();
        return view('stages.create',compact('stagiaires'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Stage $stage)
    {
        $request->validate([
           
            'stagiaire_id'=> 'required',
            'type'=> 'required',
             'date_du'=> 'required',
             'date_au'=> 'required',
              'etablissement'=> 'required',
              
              'intitule_projet'=> 'required',
              'description_projet'=> 'required',
              'description_projet'=> 'required',
            
        ]);
        $check=DB::table('stages')->where('etat',1)
        ->where('stagiaire_id',$request->stagiaire_id)->first();
        if ($check === null) {
            Stage::create($request->all());
     return redirect()->route('stages.index')
                        ->with('success','Stage created successfully.');
         }else{
             return back()->with('success','Ce stagiaire a déja un stage en cours');
         }
            
       
     
       
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(Stage $stage)
    
    {
        
        $xxx = DB::table('stagiaires')
        ->join('stages','stages.stagiaire_id',"=",'stagiaires.id')
        ->select('stagiaires.nom','stagiaires.id')
        ->where('stages.id',$stage->id)
        
        ->get();
        return view('stages.show',compact('stage'))->with(array('xxx'=>$xxx));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(Stage $stage)
    {
        $xxx = DB::table('stagiaires')
        ->join('stages','stages.stagiaire_id',"=",'stagiaires.id')
        ->select('stagiaires.nom')
        ->where('stages.id',$stage->id)
        
        ->get();
        
        return view('stages.edit',compact('stage'))->with(array('xxx'=>$xxx));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stage $stage)
    {
       
        $request->validate([
            'type'=> 'required',
            'date_du'=> 'required',
            'date_au'=> 'required',
             'etablissement'=> 'required',
             
             'intitule_projet'=> 'required',
             'description_projet'=> 'required',
             'description_projet'=> 'required',
        ]);
        
    
        $stage->update($request->all());
    
        return redirect()->route('stages.index')
                        ->with('success','Stage updated successfully');
    }
    
 



     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stage $stage)
    {
        $stage->delete();
    
        return redirect()->route('stages.index')
                        ->with('success','Stage deleted successfully');
    }


    
   


}