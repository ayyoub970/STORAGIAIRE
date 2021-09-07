<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Auth;
use App\Models\User;

class historiques extends AbstractWidget
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
        
        $secrets= User::join('activity_log','users.id','=','activity_log.causer_id')->get()->reverse()->take(8);
        return view('widgets.historiques', [
            'config' => $this->config,
            'secret' =>$secrets,
        ]);
    }
}
