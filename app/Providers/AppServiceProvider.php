<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Alerte;
use App\Models\Tache;
use App\Models\User;
use App\Models\Stagiaire;
use App\Models\Absence;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        view()->composer('layouts.alertes',function($view){
            $view->with('secret',Alerte::take(10)->latest()->where('status',1)->get());
        });

        view()->composer('dashboard.alertes',function($view){
            $view->with('secret',Alerte::take(4)->latest()->where('status',1)->get());
        });
        view()->composer('dashboard.taches',function($view){
            $view->with('secret',Tache::latest()->get());
        });
        view()->composer('dashboard.historique',function($view){
            $view->with('secret',User::join('activity_log','users.id','=','activity_log.causer_id')
            ->get()->reverse());
        });
        view()->composer('dashboard.absences',function($view){
            $view->with('secret',Absence::latest()->whereDay('created_at', now()->day)->get());
        });
        view()->composer('espacestagiaires.widgets.donetasks',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();

            $view->with('secret',DB::table('taches')
            ->where('stage_id',$stages[0]->id)
            ->where('progress','=',100)->get());
        });

        view()->composer('espacestagiaires.widgets.absences',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();


            $view->with('secret',DB::table('absences')
            ->where('stage_id',$stages[0]->id)
            ->get());
        });


        view()->composer('espacestagiaires.widgets.alertes',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
           

            $view->with('secret',DB::table('alertes')
            ->where('stage_id',$stages[0]->id)
            ->where('status','=',1)
            ->get());
        });


        view()->composer('espacestagiaires.widgets.notdonetasks',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
           
               
            $b=date_format(date_create(now()),'Y-m-d');

            $view->with('secret',DB::table('taches')
            ->where('stage_id',$stages[0]->id)
            ->where('progress','<',100)
            ->where('date_tache','<',$b)
            ->get());
        });
        view()->composer('espacestagiaires.widgets.taskstodo',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
           
               
            $b=date_format(date_create(now()),'Y-m-d');

            $view->with('secret',DB::table('taches')
            ->where('stage_id',$stages[0]->id)
            ->where('progress','<',100)
            ->where('date_tache','>=',$b)
            ->get());
        });
        
        
        view()->composer('dashboard.absencescause',function($view){
            $view->with('secret',Stagiaire::join('absences','stagiaires.id','=','absences.stagiaire_id')
            ->get()->reverse());
        });
        view()->composer('espacestagiaires.widgets.tachestest',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;

            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.id')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
            $taches=DB::table('taches')
            ->where('stage_id',$stages[0]->id)->latest()->get()->take(6);
            $view->with('secret',$taches);
        });
        
        view()->composer('espacestagiaires.widgets.annonces',function($view){
            $stagiaire_id = Auth::user()->stagiaire_id;
            $stages = DB::table('stagiaires')
            ->join('stages','stagiaires.id','stages.stagiaire_id')
            ->select('stages.type')
            ->where('stagiaire_id',$stagiaire_id)
            ->where('etat',1)
            ->get();
            $taches=DB::table('annonces')
            ->join('users','annonces.user_id',"=",'users.id')
            ->where('type',$stages[0]->type)
           ->orwhere('type','tt')
            ->latest('annonces.created_at')->get()->take(1);
            $view->with('annonces',$taches);
        });

      
       // $alertes = DB::table('alertes')->where('status',1)->get();
        //view::share('secret',$alertes);
       
       
        // view()->composer('layouts.alertes',function($view){
        //$view->with('alertes',$alertes);
        //});
    }
}
