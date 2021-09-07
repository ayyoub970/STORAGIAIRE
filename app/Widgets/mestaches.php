<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Tache;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class mestaches extends AbstractWidget
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
        $stagiaire_id = Auth::id();

        $stages = DB::table('stagiaires')
        ->join('stages','stagiaires.id','stages.stagiaire_id')
        ->select('stages.id')
        ->where('stagiaire_id',$stagiaire_id)
        ->where('etat',1)
        ->get();
        $taches=DB::table('taches')
        ->where('stage_id',$stages[0]->id)->get();

        return view('widgets.mestaches', [
            'config' => $this->config,
            'secret' => $taches,
        ]);
    }
}
