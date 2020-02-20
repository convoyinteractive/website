<?php

namespace App\Console;

use Illuminate\Console\Command;

class ClearCache extends Command
{
    protected $signature = 'cache:clear';

    protected $description = 'Flush the whole cache.';

    public function handle()
    {
        app('cache')->flush();

        $this->info('Cache cleared.');
    }
}
