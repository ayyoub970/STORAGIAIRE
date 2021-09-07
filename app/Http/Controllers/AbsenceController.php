<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Absence;
use App\Models\Stage;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AbsenceController extends Controller
{


    public function index()
    {
       $absences = DB::table('absences') ->get();
        return view('absences.index')->with(array("absences"=>$absences));
    }
    
    public function create(){

       
       
        $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
        ->get();
         //$xxx = DB::table('stages')->get();
         return view('absences.create')->with(array('xxx'=>$xxx));
        
        
        
      }



      public function store(Request $request, Absence $absence){
        $request->validate([
            'stage_id'=> 'required',
            'date_du'=> 'required',
            'date_au'=> 'required',
           
            'cause'=> 'required',   
        ]);


       
        $input=$request->all();
    
          Absence::create($input);
       
          return redirect()->route('absences.index')
          ->with('success','absence created successfully.');
           ;
            
        }
  


    public function show(Absence $absence)
    
    {
        return view('absences.show',compact('absence'));
    } 
     
   
    public function edit(Absence $absence)
    {
         return view('absences.edit',compact('absence'));
    }



   


    
    
    public function update(Request $request, Absence $absence)
    {
       
        $request->validate([
         
        'date_du'=> 'required',
        'date_au'=> 'required',
        'cause'=> 'required',  
        ]);
    
        $absence->update($request->all());
    
        return redirect()->route('absences.index')->with('success','Absence updated successfully');
    }
    
 



    
    public function destroy(Absence $absence)
    {
        $absence->delete();
    
        return redirect()->route('absences.index')
                        ->with('success','Absence deleted successfully');
    }
}
