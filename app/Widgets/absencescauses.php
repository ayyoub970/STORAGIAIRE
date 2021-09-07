<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Absence;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\DB;

class absencescauses extends AbstractWidget
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
        //
      
         $secrets=DB::table('stagiaires')
         ->join('stages','stagiaires.id','stages.stagiaire_id')
         ->join('absences','stages.id','absences.stage_id')
         ->get()->reverse()->take(4);
        return view('widgets.absencescauses', [
            'config' => $this->config,
            'secret' => $secrets,
        ]);
    }
}
