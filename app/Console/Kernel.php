<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        ClearCache::class,
        LinkAssets::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        //
    }
}
