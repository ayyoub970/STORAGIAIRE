<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;
use App\Models\Tache;

class donetasks extends AbstractWidget
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
        $xxx= DB::table('taches')->get();
        $i=0;
        foreach($xxx as $x){
        $a=$x->date_tache;
        $c=date_create($x->updated_at);     
        $b=date_format($c,'Y-m-d');
        $d=$x->progress;
                    if($a >= $b and $d == 100){
                        $i++;
                        }

                           }
  

        return view('widgets.donetasks', [
            'config' => $this->config,
            'i'=>$i,
        ]);
    }
}
