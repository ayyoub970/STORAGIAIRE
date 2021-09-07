<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

class Stagestart extends AbstractWidget
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
        $b=date_format(date_create(now()),'Y-m-d');
        $secrets=DB::table('stages')->where('date_du', $b)->get();
        return view('widgets.stagestart', [
            'config' => $this->config,
            'secret'=>$secrets,
        ]);
    }
}
