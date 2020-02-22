<?php

namespace App\Console;

use Illuminate\Console\Command;

class LinkAssets extends Command
{
    protected $signature = 'link:assets';

    protected $description = 'Create a symbolic link from "public/assets" to "storage/content/assets"';

    public function handle()
    {
        if (! file_exists(base_path('public/assets'))) {
            $this->laravel->make('files')->link(
                storage_path('content/assets'),
                base_path('public/assets')
            );
        }

        $this->info('The [public/assets] directory has been linked.');
    }
}
