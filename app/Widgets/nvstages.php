<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Stage;
use Illuminate\Support\Facades\DB;

class nvstages extends AbstractWidget
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
        $secrets=DB::table('stages')->whereDate('created_at', $b)->get();

        return view('widgets.nvstages', [
            'config' => $this->config,
            'secret'=>$secrets,
        ]);
    }
}
