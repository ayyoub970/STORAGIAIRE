<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Tache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EspacestagiaireController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stagiaire_id = Auth::user()->stagiaire_id;

        $stages = DB::table('stagiaires')
        ->join('stages','stagiaires.id','stages.stagiaire_id')
        ->select('stages.type')
        ->where('stagiaire_id',$stagiaire_id)
        ->where('etat',1)
        ->get();
        $kawlamaka=DB::table('annonces')
        ->where('etat',1)
        ->where('type',$stages[0]->type)
        ->orwhere('type','tt')->latest('annonces.created_at')->get()->take(1);
        return view('espacestagiaires.index')->with(array('kawlamaka'=>$kawlamaka));
    }
    public function mesabsences(){
        $stagiaire_id = Auth::user()->stagiaire_id;
        $stages = DB::table('stagiaires')
        ->join('stages','stagiaires.id','stages.stagiaire_id')
        ->select('stages.id')
        ->where('stagiaire_id',$stagiaire_id)
        ->where('etat',1)
        ->get();
        $absences = DB::table('absences')->where('stage_id',$stages[0]->id)->get();
        return view('espacestagiaires.mesabsences')->with(array('absences'=>$absences));
    }
    public function voirabsence($id ){
        $stagiaire_id = Auth::user()->stagiaire_id;
        $stages = DB::table('stagiaires')
        ->join('stages','stagiaires.id','stages.stagiaire_id')
        ->select('stages.id')
        ->where('stagiaire_id',$stagiaire_id)
        ->where('etat',1)
        ->get();
        $absences = DB::table('absences')->where('stage_id',$stages[0]->id)->where('id',$id)->get();
        return view('espacestagiaires.voirabsence')->with(array('absences'=>$absences));
    }
    public function createabsence(){
        $stagiaire_id = Auth::user()->stagiaire_id;
        
        return view('espacestagiaires.ajouterabsence')->with(array('stagiaire_id'=>$stagiaire_id));
    }

    public function storeabsence(Request $request, Absence $absence){
        $request->validate([
            'date_du'=> 'required',
            'date_au'=> 'required',
            'stagiaire_id'=> 'required',
            'cause'=> 'required',   
        ]);

       
        $input=$request->all();
    
          Absence::create($input);
       
          return redirect()->route('espacestagiaires.mesabsences')
          ->with('success','absence created successfully.');
           ;
            
        }

        //fffffffffffffffffffffffffffffffassilffffffffffffffffffffffffffffffffffffff


        public function mestaches(){
            $stagiaire_id = Auth::user()->stagiaire_id;

            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
            $taches=DB::table('taches')
            ->where('stage_id',$stages[0]->id)->get();
            //
            //->get();
           //->where('stagiaire_id',$stagiaire_id)->get();
            return view('espacestagiaires.mestaches')->with(array('taches'=>$taches));
        }
        public function voirtache($id ){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
            
            $tache = DB::table('taches')->where('stage_id',$stages[0]->id)->where('id',$id)->get();
            $count=$tache->count();
            if($count == 0){
                abort(403);
            }
            return view('espacestagiaires.voirtache',compact('tache'));//->with(array('tache'=>$taches));
        }
        public function createtache(){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
            return view('espacestagiaires.ajoutertache')->with(array('stages'=>$stages));
        }
    
        public function storetache(Request $request, Tache $tache){
            $request->validate([
                'stage_id'=>'required',
                'progress'=> 'required',
                'tacheafaire'=> 'required',
                'date_tache'=> 'required',  
                
            ]);
    
           
            $input=$request->all();
        
              Tache::create($input);
           
              return redirect()->route('espacestagiaires.mestaches')
              ->with('success','Rache created successfully.');
               ;
                
            }

            public function editprogress($id)
            {
              
               $stagiaire_id = Auth::user()->stagiaire_id;
                $stages = DB::table('stagiaires')
                ->join('stages','stagiaires.id','stages.stagiaire_id')
                ->select('stages.id')
                ->where('stagiaire_id',$stagiaire_id)
                ->where('etat',1)
                ->get();
                
                $tache = DB::table('taches')->where('stage_id',$stages[0]->id)->where('id',$id)->get();
                $count=$tache->count();
                if($count == 0){
                    abort(403);
                }
                return view('espacestagiaires.editprogress',compact('tache'));//->with(array('tache'=>$taches));
            
            }
          
            public function updateprogress(Request $request, Tache $tache)
            {
                $request->validate([
                    'progress'=> 'required',
                    
                ]);
            
                $tache->update($request->all());
            
                return redirect()->route('espacestagiaires')
                                ->with('success','Preogress updated successfully');
            }

}
// $stagiaire_id = Auth::user()->stagiaire_id;
//$absences = DB::table('absences')->where('stagiaire_id',$stagiaire_id)
//->get();

           