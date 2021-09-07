<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListStgController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\StagepiecesController;
use App\Http\Controllers\ActivitylogController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlerteController;
use App\Http\Controllers\EspacestagiaireController;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Tache;
use Carbon\Carbon;
use App\Models\Absence;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
  if(Auth::user()->role == 0){
    return redirect('/home');
  }elseif(Auth::user()->role > 0){
    return redirect('/espacestagiaires');
  }else{
    return dd("votre compte est désactivé");
  }
  
})->middleware('auth');




Route::get('/usertype', function () {
return view('auth.usertype');
})->middleware('admin');

Route::get('registerss', function () {
$xxx = DB::table('stagiaires')->get();
  
return view('registers.index')->with(array('xxx'=>$xxx));
})->middleware('admin');


//Route::get('registers/{id}', function ($id) {
  //$xxx = DB::table('stagiaires')->where('id',$id)->get();
  //
  //return view('auth.registers')->with(array('yyy'=>$xxx));
//})->middleware('auth');



//Route::get('/showintern',function(){
  //  return view('stagiaire.show');
//});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');




//Route::get('/stage', [App\Http\Controllers\StageController::class, 'index'])->name('stage');

//Route::get('/addstg', [App\Http\Controllers\AddStgController::class, 'index'])->name('addStg');


//Route::get('/updateuser', [App\Http\Controllers\UpdateUserController::class, 'index'])->name('updateuser');

Route::resource('stagiaires', StagiaireController::class)->middleware('admin');
Route::resource('stages', StageController::class)->middleware('admin');
Route::resource('rapports', RapportController::class)->middleware('admin');
Route::resource('stagepieces', StagepiecesController::class)->middleware('admin');
Route::resource('tache', TacheController::class)->middleware('admin');
Route::resource('absences', AbsenceController::class)->middleware('admin');
Route::resource('alertes', AlerteController::class)->middleware('admin');
Route::resource('registers', RegisterController::class)->middleware('admin');
Route::resource('annonces', AnnonceController::class)->middleware('admin');
Route::resource('users', UserController::class)->middleware('admin');

Route::get('mine', [App\Http\Controllers\ActivitylogController::class, 'mine'])->name('activitylogs.mine')->middleware('admin');
//Route::get('registers', [App\Http\Controllers\RegisterController::class, 'registers'])->name('auth.registers');
Route::post('registerss', [App\Http\Controllers\RegisterController::class, 'registerss'])->name('registers.registerss')->middleware('admin');
Route::post('registers/check', [App\Http\Controllers\RegisterController::class, 'check'])->name('registers.check')->middleware('admin');
//Route::post('/registers/check', 'RegisterController@check')->name('registers.check');
Route::resource('activitylogs', ActivitylogController::class)->middleware('admin');
//Route::resource('layouts', LayoutController::class);

Route::get('listesdestaches/{id}', function ($id) {
 
  $taches = DB::table('taches')->where('stage_id',$id)->get();
  
 
  return view('tache.index')->with(array('taches'=>$taches));

})->middleware('admin');
Route::get('listesdesabsences/{id}', function ($id) {
 
  $absences = DB::table('absences')
  ->where('stage_id',$id)->get();
  
 
  return view('absences.index')->with(array('absences'=>$absences));

})->middleware('admin');
Route::get('listesdesalertes/{id}', function ($id) {
 
  $alertes = DB::table('alertes')->where('stage_id',$id)->get();
  
 
  return view('alertes.index')->with(array('alertes'=>$alertes));

})->middleware('admin');
Route::get('createabsence/{id}', function ($id) {
   $stages_id=$id;
  return view('absences.create')->with('stages_id',$stages_id);

})->middleware('admin');
Route::get('createtache/{id}', function ($id) {
  $stages_id=$id;
 return view('tache.create')->with('stages_id',$stages_id);

})->middleware('admin');
Route::get('createalerte/{id}', function ($id) {
  $stages_id=$id;
 return view('alertes.create')->with('stages_id',$stages_id);

})->middleware('admin');
Route::get('showalerte/{id}', function ($id) {
  $alertes = DB::table('alertes')->where('id',$id)->get();
  
 return view('alertes.show')->with('alertes',$alertes);

})->middleware('admin');



Route::get('showstory/{id}', function ($id)
    {
        $user = User::find($id);
        $activities = Activity::where('causer_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('activitylogs.show')->with([
            'activities' => $activities,
        ]);
    })->middleware('admin');



Route::get('showhistory/{id}', function ($id) {
  $activities = Activity::where('id', $id)->get();
  return view('activitylogs.show')->with([
    'activities' => $activities, ]);
})->middleware('admin');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes intern
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 // return redirect('/home');
//})->middleware('intern');

Route::get('/espacestagiaires', [App\Http\Controllers\EspacestagiaireController::class, 'index'])->name('espacestagiaires')->middleware('intern');
Route::get('/mesabsences', [App\Http\Controllers\EspacestagiaireController::class, 'mesabsences'])->name('mesabsences')->middleware('intern');
Route::get('/mesabsences', [App\Http\Controllers\EspacestagiaireController::class, 'mesabsences'])->name('espacestagiaires.mesabsences')->middleware('intern');
Route::get('/voirabsence/{id}', [App\Http\Controllers\EspacestagiaireController::class, 'voirabsence'])->name('espacestagiaires.voirabsence')->middleware('intern');
Route::get('/ajouterabsence', [App\Http\Controllers\EspacestagiaireController::class, 'createabsence'])->name('createabsence')->middleware('intern');
Route::get('/ajouterabsence', [App\Http\Controllers\EspacestagiaireController::class, 'createabsence'])->name('espacestagiaires.createabsence')->middleware('intern');
Route::post('/storeabsence', [App\Http\Controllers\EspacestagiaireController::class, 'storeabsence'])->name('espacestagiaires.storeabsence')->middleware('intern');
//Route::get('/mestaches', [App\Http\Controllers\EspacestagiaireController::class, 'mestaches'])->name('mestaches')->middleware('intern');
Route::get('/mestaches', [App\Http\Controllers\EspacestagiaireController::class, 'mestaches'])->name('espacestagiaires.mestaches')->middleware('intern');
Route::get('/voirtache/{id}', [App\Http\Controllers\EspacestagiaireController::class, 'voirtache'])->name('espacestagiaires.voirtache')->middleware('intern');
Route::get('/ajoutertache', [App\Http\Controllers\EspacestagiaireController::class, 'createtache'])->name('espacestagiaires.createtache')->middleware('intern');
Route::post('/storetache', [App\Http\Controllers\EspacestagiaireController::class, 'storetache'])->name('espacestagiaires.storetache')->middleware('intern');
Route::get('/editprogress/{id}', [App\Http\Controllers\EspacestagiaireController::class, 'editprogress'])->name('espacestagiaires.editprogress')->middleware('intern');
Route::put('/updateprogress/{tache}', [App\Http\Controllers\EspacestagiaireController::class, 'updateprogress'])->name('espacestagiaires.updateprogress')->middleware('intern');


Route::get('/tachestest.blade.php',function() {
  return view('dashboard.tachestest');
   
  });


Route::get('/tacheseffectues',function() {
 return view('listes.tacheseffectues');
  
 });
 Route::get('/tachesenretard',function() {
  return view('listes.tachesenretard');
   
  });
  Route::get('/nouvellesabsences',function() {
    
    
    $absences = DB::table('absences')    
    ->whereDate('created_at', now())->get()->toarray();
    return view('listes.nouvellesabsences')->with(array('absences'=>$absences));
     
    });
    Route::get('/nouveauxstages',function() {
    
    
      $stages = DB::table('stagiaires')
      ->join('stages','stagiaires.id','=','stages.stagiaire_id')
      
      ->whereDate('stages.created_at', now())->get()->toarray();
      return view('listes.nouveauxstages')->with(array('xxx'=>$stages));
       
      });

      Route::get('/stagesstart',function() {
    
        $b=date_format(date_create(now()),'Y-m-d');
        $stages = DB::table('stagiaires')
        ->join('stages','stagiaires.id','=','stages.stagiaire_id')
        
        ->where('stages.date_du', $b)->get()->toarray();
        return view('listes.nouveauxstages')->with(array('xxx'=>$stages));
         
        });

        Route::get('/stagesend',function() {
    
          $b=date_format(date_create(now()),'Y-m-d');
          $stages = DB::table('stagiaires')
          ->join('stages','stagiaires.id','=','stages.stagiaire_id')
          
          ->where('stages.date_au', $b)->get()->toarray();
          return view('listes.stagesend')->with(array('xxx'=>$stages));
           
          });

 
      Route::get('/downloadfiless/{stages_id}/{chemin}', [App\Http\Controllers\StagepiecesController::class, 'downloadfiless'])->name('stagepieces.downloadfiless');
      Route::get('/downloadfiles/{stage_id}', [App\Http\Controllers\RapportController::class, 'downloadfiles'])->name('rapports.downloadfiles');
      Route::get('/modifier/{stage_id}', [App\Http\Controllers\StagepiecesController::class, 'modifier'])->name('stagepieces.modifier');

       //Route::get('downloadfiles/{chemin}','StagepiecesController@downloadfiles');

       
       Route::get('/stagesnop',function(){
          return view('listes.stagesnop');
         });
          Route::get('/stagesnor',function(){
          return view('listes.stagesnor');
         });

         Route::get('/stagepiecess',function(){
           
          
  
       return view('stagepieces.index1');
         
         });
          



Route::get('testcheck',function(){
 
  $annonces = DB::table('users')
        ->join('annonces','annonces.user_id','users.id')
        ->where('annonces.etat',1)
       ->get() ->reverse();
    return $annonces;
  
   
                        
              
});