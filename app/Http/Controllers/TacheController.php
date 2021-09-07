<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Tache;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TacheController extends Controller
{


    public function index()
    {
      
        $taches = Tache::latest()->get();
    
        return view('tache.index',compact('taches'))
            ;
    }
    
    public function create(){

    
       
        $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
      
         ->get();
         return view('tache.create')
         ->with(array('xxx'=>$xxx));

      }



      public function store(Request $request, Tache $tache){
        $request->validate([
        
      
        'stage_id'=>'required',
        'tacheafaire'=> 'required',
        'date_tache'=> 'required',  
        'progress'=> 'required',    
        ]);


       
        $input=$request->all();
    
          Tache::create($input);
       
          return redirect()->route('tache.index')
          ->with('success','tache created successfully.');
           ;
            
        }
  


    public function show(Tache $tache)
    
    {
        
       
        return view('tache.show',compact('tache'));
    } 
     
   
    public function edit(Tache $tache)
    {
      
     
      $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
      
         ->get();
         return view('tache.edit',compact('tache'))
         ->with(array('xxx'=>$xxx));
    }



   


    
    
    public function update(Request $request, Tache $tache)
    {
       
        $request->validate([
         
        
        'tacheafaire'=> 'required',
        'date_tache'=> 'required',  
        
        ]);
    
        $tache->update($request->all());
    
        return redirect()->route('tache.index')->with('success','Tache updated successfully');
    }
    
 



    
    public function destroy(Tache $tache)
    {
        $tache->delete();
    
        return redirect()->route('tache.index')
                        ->with('success','Tache deleted successfully');
    }

    public function indexfilter(Tache $tache)
    {
      
        $taches = Tache::latest()->where('taches.id',$tache);
    
        return view('tache.index',compact('taches'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
