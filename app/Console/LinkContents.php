<?php

namespace App\Console;

use Illuminate\Console\Command;

class LinkContents extends Command
{
    protected $signature = 'link:contents';

    protected $description = 'Create a symbolic link from "public/contents" to "storage/content"';

    public function handle()
    {
        if (! file_exists(base_path('public/contents'))) {
            $this->laravel->make('files')->link(
                storage_path('content'),
                base_path('public/contents')
            );
        }

        $this->info('The [public/contents] directory has been linked.');
    }
}
