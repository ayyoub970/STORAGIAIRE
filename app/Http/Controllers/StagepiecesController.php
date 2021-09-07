<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use App\Models\Stagepieces;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Storage;
use Response;

class StagepiecesController extends Controller
{

 // //public function index(){
    //return view('stagepieces.create');
  //}
 
  public function index()
    {
      
        $stagepieces = Stagepieces::latest()->paginate(5);
    
        return view('stagepieces.index',compact('stagepieces'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
 
 
 
  public function create(){

    
    $xxx = DB::table('stagiaires')
    ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
  
     ->get();
     return view('stagepieces.create')
     ->with(array('xxx'=>$xxx));
    
    
    
  }

  public function store(Request $request){
       

        $xxx = DB::table('stagiaires')
        ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
        ->select('stagiaires.nom','stages.id')
        ->where('stages.id',$request->stages_id)
         ->get();
        //
       
        $check='public/files/'.$xxx[0]->id; 
if(!is_dir($check)) {
      $request->validate([
        
            'stages_id'=> 'required',
            'CV'=> "required|mimes:pdf|max:10000",
            'CIN'=> "required|mimes:pdf|max:10000",
            'AS'=> "required|mimes:pdf|max:10000",
            'CS'=> "required|mimes:pdf|max:10000",
            'DS'=> "required|mimes:pdf|max:10000",
          
            ]);
            $input=$request->all();
           mkdir($check, 0755, true);
              if ($request->hasFile('CV'))
                      {
                            $idd='CV';
                            $destination_path=$check;
                            $chemin=$request->file('CV');
                            $ext=$chemin->getClientOriginalExtension();
                            $path=$request->file('CV')->storeAs($destination_path,$idd ."." .$ext);
                            $input['chemin']=$idd ."." .$ext;
                            $input['piecesjointes_id']=$idd;
                            Stagepieces::create($input);
                       }
              if ($request->hasFile('DS'))
                       {
                       $idd='DS';
                       $destination_path=$check;
                       $chemin=$request->file('DS');
                       $ext=$chemin->getClientOriginalExtension();
                       $path=$request->file('DS')->storeAs($destination_path,$idd ."." .$ext);
                       $input['chemin']=$idd ."." .$ext;
                       $input['piecesjointes_id']=$idd;
                       Stagepieces::create($input);
                       }
                if ($request->hasFile('CIN'))
                      {
                       $idd='CIN';
                       $destination_path=$check;
                       $chemin=$request->file('CIN');
                       $ext=$chemin->getClientOriginalExtension();
                       $path=$request->file('CIN')->storeAs($destination_path,$idd ."." .$ext);
                       $input['chemin']=$idd ."." .$ext;
                       $input['piecesjointes_id']=$idd;
                       Stagepieces::create($input);
                      }
                if ($request->hasFile('AS'))
                      {
                      $idd='AS';
                      $destination_path=$check;
                      $chemin=$request->file('AS');
                      $ext=$chemin->getClientOriginalExtension();
                      $path=$request->file('AS')->storeAs($destination_path,$idd ."." .$ext);
                      $input['chemin']=$idd ."." .$ext;
                      $input['piecesjointes_id']=$idd;
                      Stagepieces::create($input);
                      }
                  if ($request->hasFile('CS'))
                      {
                      $idd='CS';
                      $destination_path=$check;
                      $chemin=$request->file('CS');
                      $ext=$chemin->getClientOriginalExtension();
                      $path=$request->file('CS')->storeAs($destination_path,$idd ."." .$ext);
                      $input['chemin']=$idd ."." .$ext;
                      $input['piecesjointes_id']=$idd;
                      Stagepieces::create($input);
                      }
                     
      }
      elseif(is_dir($check)) {
            $request->validate(['stages_id'=> "required"]);
            $input=$request->all();
        if ($request->hasFile('CV'))
        {
            $request->validate(['CV'=> "required|mimes:pdf|max:10000"]);
         $idd='CV';
         $destination_path=$check;
         $chemin=$request->file('CV');
         $ext=$chemin->getClientOriginalExtension();
         $path=$request->file('CV')->storeAs($destination_path,$idd ."." .$ext);
         $input['chemin']=$idd ."." .$ext;
         $input['piecesjointes_id']=$idd;
          Stagepieces::create($input);
         }
if ($request->hasFile('DS'))
         {
            $request->validate(['DS'=> "required|mimes:pdf|max:10000"]);
         $idd='DS';
         $destination_path=$check;
         $chemin=$request->file('DS');
         $ext=$chemin->getClientOriginalExtension();
         $path=$request->file('DS')->storeAs($destination_path,$idd ."." .$ext);
         $input['chemin']=$idd ."." .$ext;
         $input['piecesjointes_id']=$idd;
         Stagepieces::create($input);
         }
  if ($request->hasFile('CIN'))
        {
            $request->validate(['CIN'=> "required|mimes:pdf|max:10000"]);
         $idd='CIN';
         $destination_path=$check;
         $chemin=$request->file('CIN');
         $ext=$chemin->getClientOriginalExtension();
         $path=$request->file('CIN')->storeAs($destination_path,$idd ."." .$ext);
         $input['chemin']=$idd ."." .$ext;
         $input['piecesjointes_id']=$idd;
         Stagepieces::create($input);
        }
  if ($request->hasFile('AS'))
        {
            $request->validate(['AS'=> "required|mimes:pdf|max:10000"]);
        $idd='AS';
        $destination_path=$check;
        $chemin=$request->file('AS');
        $ext=$chemin->getClientOriginalExtension();
        $path=$request->file('AS')->storeAs($destination_path,$idd ."." .$ext);
        $input['chemin']=$idd ."." .$ext;
        $input['piecesjointes_id']=$idd;
        Stagepieces::create($input);
        }
    if ($request->hasFile('CS'))
        {
            $request->validate(['CS'=> "required|mimes:pdf|max:10000"]);
        $idd='CS';
        $destination_path=$check;
        $chemin=$request->file('CS');
        $ext=$chemin->getClientOriginalExtension();
        $path=$request->file('CS')->storeAs($destination_path,$idd ."." .$ext);
        $input['chemin']=$idd ."." .$ext;
        $input['piecesjointes_id']=$idd;
        Stagepieces::create($input);
        }
            }
    
            return back()
                      ->with('success','File has been uploaded.');
            
        }


        public function downloadfiless($stages_id, $chemin)
        {
          //return Response::download('storage/files/'.$stages_id.'/'.$chemin);
          return response()->file('storage/files/'.$stages_id.'/'.$chemin);
        }



        public function modifier($stage_id)
        {
          //return Response::download('storage/files/'.$stage_id.'/rapport.pdf');
          $xxx = DB::table('stagiaires')
          ->join('stages','stagiaires.id',"=",'stages.stagiaire_id')
        ->where('stages.id',$stage_id)
     
           ->get();
           return view('stagepieces.edit')
           ->with(array('xxx'=>$xxx));    }





   }








