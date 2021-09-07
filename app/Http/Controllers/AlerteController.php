<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Alerte;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AlerteController extends Controller
{


    public function index()
    {
       
       // $alertes=Stage::find(1)->alerte->get();
        //return $alertes;
      
       $alertes = Alerte::latest()->paginate(5);
    
        return view('alertes.index',compact('alertes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create(){

    
        $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
      
         ->get();
         return view('alertes.create')
         ->with(array('xxx'=>$xxx));
        
        
        
      }



      public function store(Request $request, Alerte $alerte){
        $request->validate([
            'stage_id'=> 'required',
            'date_creation'=> 'required',
            'contenu'=> 'required',
           'status'=> 'required',   
        ]);


       
        $input=$request->all();
    
          Alerte::create($input);
       
          return redirect()->route('alertes.index')
          ->with('success','alerte created successfully.');
           ;
            
        }
  


    public function show(Alerte $alerte)
    
    {
        
       
        return view('alertes.show',compact('alerte'));
    } 
     
   
    public function edit(Alerte $alerte)
    {
      
     
      $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
      
         ->get();
         return view('alertes.edit',compact('alerte'))
         ->with(array('xxx'=>$xxx));
    }



   


    
    
    public function update(Request $request, Alerte $alerte)
    {
       
        $request->validate([
         
           
            
            'contenu'=> 'required', 
        ]);
    
        $alerte->update([
            'contenu'=>$request->contenu,
            'status'=>$request->has('status')
        ]);
    
        return redirect()->route('alertes.index')->with('success','Alerte updated successfully');
    }
    
 



    
    public function destroy(Alerte $alerte)
    {
        $alerte->delete();
    
        return redirect()->route('alertes.index')
                        ->with('success','Alerte deleted successfully');
    }
}
