<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\FrontendController;

class RunGetGameId1Min extends Command
{
    protected $signature = 'run:getgameid1min';
    protected $description = 'Run the getgameId1min function';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $controller = new FrontendController();
        $controller->getgameId1min();
        $this->info('getgameId1min function executed successfully.');
    }
}
