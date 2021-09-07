<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

class Stagenop extends AbstractWidget
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
       $xxx=DB::table('stages')->select('stages.id')->get();
       $i=0;
        foreach($xxx as $x){
            $check='public/files/'.$x->id;
            if(!is_dir($check)) {
                            $i++;
                            }
    
                               }
                               $secrets=$i;
        

        return view('widgets.stagenop', [
            'config' => $this->config,
            'secret' =>$secrets,
        ]);
    }
}
