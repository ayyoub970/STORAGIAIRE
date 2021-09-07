<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Tache;

class taches extends AbstractWidget
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
        $secrets=Tache::latest()->get()->take(6);
        return view('widgets.taches', [
            'config' => $this->config,
            'secret' => $secrets,
        ]);
    }
}
