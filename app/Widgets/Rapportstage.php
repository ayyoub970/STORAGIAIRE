<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

class Rapportstage extends AbstractWidget
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
        $b=date_format(date_create(now()),'Y-m-d');
        $xxx=DB::table('stages')->select('stages.id')
        ->where('date_au','<=',$b)->get();
       $i=0;
        foreach($xxx as $x){
            
            if(!file_exists('storage/files/'.$x->id.'/rapport.pdf')) {
                            $i++;
                            }
    
                               }
                               $secrets=$i;

        return view('widgets.rapportstage', [
            'config' => $this->config,
            'secrets' => $secrets,
        ]);
    }
}
