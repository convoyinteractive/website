<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        LinkContents::class
    ];

    protected function schedule(Schedule $schedule)
    {
        //
    }
}
