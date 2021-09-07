<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Rapport;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Storage;
use Response;
use File;

class RapportController extends Controller
{

 // //public function index(){
    //return view('rapports.create');
  //}
 
  public function index()
    {
      
        $rapports = DB::table('rapports')->get();
    
        return view('rapports.index',compact('rapports'));
    }
 
 
 
 
  public function create(){

    
    $xxx = DB::table('stages')
     ->get();
     return view('rapports.create')
     ->with(array('xxx'=>$xxx));
    
    
    
  }

  public function store(Request $request){
        $request->validate([
        
        'stage_id'=> 'required',
        'EncadrantPro'=> 'required',
        'titre'=> 'required',
        'EncadrantPed'=> 'required',
        'Sommaire'=> 'required',
        'rapport'=> "required|mimes:pdf|max:10000",
      
        ]);

        
        $input=$request->all();
       
        $check='public/files/'.$request->stage_id; 
if(!is_dir($check)) {
      return back()
      ->with('success',"Vous devez ajoutez les pieces de stage d'abord.");
              
                       }
      if(is_dir($check)) {
            if ($request->hasFile('rapport'))
        {
            $idd='rapport';
            $destination_path=$check;
            $chemin=$request->file('rapport');
            $ext=$chemin->getClientOriginalExtension();
            $path=$request->file('rapport')->storeAs($destination_path,$idd ."." .$ext);
            //$input['chemin']=$idd ."." .$ext;
            Rapport::create($input);
            return back()
                      ->with('success','File has been uploaded.');
         }

            }
    
            
            
        }


        public function downloadfiles($stage_id)
        {
          //return Response::download('storage/files/'.$stage_id.'/rapport.pdf');
          return response()->file('storage/files/'.$stage_id.'/rapport.pdf');
        }



        public function show(Rapport $rapport){
     
          return view('rapports.show',compact('rapport'));
        }

        public function edit(Rapport $rapport)
        {
           return view('rapports.edit',compact('rapport'));
        }


        public function update(Request $request, Rapport $rapport)
        {
          $request->validate([
            'titre'=> 'required',
            'EncadrantPro'=> 'required',
            'EncadrantPed'=> 'required',
             'Sommaire'=> 'required',
             //'rapport'=> "required|mimes:pdf|max:10000"
        ]);
        $rapport->update($request->all());
        
        if ($request->hasFile('rapport'))
        {
           $request->validate(['rapport'=> "required|mimes:pdf|max:10000"]);
          $check='storage/files/'.$request->stage_id.'/rapport.pdf'; 

        File::delete($check);
      
           $idd='rapport';
            $destination_path='public/files/'.$request->stage_id;
            $chemin=$request->file('rapport');
            $ext=$chemin->getClientOriginalExtension();
        $path=$request->file('rapport')->storeAs($destination_path,$idd ."." .$ext);
        
      }
    
         return redirect()->route('rapports.show',$request->stage_id)
                        ->with('success','Rapport updated successfully');
       }

   }


 






