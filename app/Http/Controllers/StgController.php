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




class StgController extends Controller{

    protected $stage, $stagepiece;
   
    public function __construct(){
        $this->stage=new Stage();
         $this->stagepiece=new Stagepiece();
    }
    public function create(){
        return view ('stages.create');
    }
    
    
    public function store(Request $req){
        
        try{
            $stage= $this->stage->create(
                [
                    'type' =>$req->type,
                    'date_du' =>$req->date_du,
                    'date_au' =>$req->date_au,
                    'etablissement' =>$req->etablissement,
                    'intitule_projet' =>$req->intitule_projet,
                    'description_projet' =>$req->description_projet
                  
                   
                ]
            );
            $stage->id;
            $lii=$stage->id; 
            if ($stage) {
                $req->validate(['file' => 'required' ]);
                $req->file->store('public');
                $stagepiece = $this->stagepiece->create(
                    [
                       'piecesjointes_id' =>$req->name,
                       'stages_id' =>$lii,
                       'nom' =>$req->address,
                       'chemin' =>$req->chemin,
               
                   ]
               );
            }
           
            if($stage && $stagepiece){
                DB::comit();
            }else{
                 DB::rollback();
            }
            return redirect()->back();
        }
        catch(Exception $ex){
                DB::rollback();
                return redirect()->back();
        }
    }
    }