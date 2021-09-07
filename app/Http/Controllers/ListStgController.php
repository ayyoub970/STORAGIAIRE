<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
class ListStgController extends Controller
{
    //
  //to acsess this page you should be connected (login)
  public function __construct()
  {
      $this->middleware('auth');}
  //to acsess this page you should be connected (login)

   function index()
  {
      $data= DB::table('users')->get();
      return view('liststg',['data'=>$data]); //replace compact(user) with last
  }
}
