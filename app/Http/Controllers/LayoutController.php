<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerte;

class LayoutController extends Controller
{
    //
    public function index()
    {
      
        $alertes = Alerte::latest()->paginate(5);
    
        return view('layouts.index',compact('alertes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
