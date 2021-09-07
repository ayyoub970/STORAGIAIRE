<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Alerte;

class alertes extends AbstractWidget
{
    public $reloadTimeout = 15;
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
        $secrets=Alerte::take(5)->latest()->where('status',1)->get();
        return view('widgets.alertes', [
            'config' => $this->config,
            'secret'=>$secrets,
        ]);
    }
}
