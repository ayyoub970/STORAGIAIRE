<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;  
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;


class ActivitylogController extends Controller
{
    public function index()
    {
       // $data= Activity::join('users','activity_log.causer_id','=','users.id')->get();
        $sata= User::join('activity_log','users.id','=','activity_log.causer_id')->get()
        ->reverse();
        
      return view('activitylogs.index',['data'=>$sata])->with('i');

    }
    public function mine()
    {
     
      $sata= User::join('activity_log','users.id','=','activity_log.causer_id')
      ->where('users.id',Auth::user()->id)
        ->get()
        ->reverse();
        
      return view('activitylogs.index',['data'=>$sata])->with('i');

    }

    public function show($id)
    {
      $activities = Activity::where('id', $id)->get();
      return view('activitylogs.show')->with(['activities' => $activities, ]);
    }

    public function destroy($id)
    {
      $res=Activity::where('id',$id)->delete();
        //$activity->delete();
    
        return redirect()->route('activitylogs.index')
                        ->with('success','historique deleted successfully');
    }
}
