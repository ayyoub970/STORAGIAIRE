<?php

namespace App\Widgets;
use App\Models\Alerte;
use Illuminate\Support\Facades\DB;

use Arrilot\Widgets\AbstractWidget;

class Annonces extends AbstractWidget
{
    public $reloadTimeout = 10;
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        
        $annonces = DB::table('users')
        ->join('annonces','annonces.user_id','users.id')
        ->where('annonces.etat',1)
       ->get() ->reverse()->take(1);
        
        return view('widgets.annonces', [
            'config' => $this->config,
            'annonces'=>$annonces
        ]);
    }
}
