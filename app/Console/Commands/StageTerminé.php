<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class StageTerminé extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stage:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "le stage dont la date_au > date d'aoujourd'hui sera désactivé";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $b=date_format(date_create(now()),'Y-m-d');
        DB::table('stages')->where('date_au', '<', $b)->update(['etat' => '0']);
        DB::table('stages')->where('date_au', '>', $b)->update(['etat' => '1']);

    }
}
