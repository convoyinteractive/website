<?php

namespace App\Console;

use Illuminate\Console\Command;
use App\Repositories\Newsletter as NewsletterRepository;

class Newsletter extends Command
{
    protected $newsletter;

    protected $campaigns = [];

    protected $signature = 'newsletter';

    protected $description = 'Create and send a new newsletter campaign';

    public function __construct(NewsletterRepository $newsletter)
    {
        $this->newsletter = $newsletter;

        parent::__construct();
    }

    public function handle()
    {
        $this->addCampaign();

        $this->table(['Campaigns'], array_map(function ($campaign) {
            return [$campaign->get('meta.title')];
        }, $this->campaigns));
    }

    public function addCampaign()
    {
        $locale = $this->choice('Choose a language', ['de', 'en']);
        $name = $this->choice('Choose a newsletter', $this->filenames($locale));
        $this->campaigns[] = $this->newsletter->fetch("{$locale}/{$name}");

        if ($this->confirm('Do you wish to add another campaign?')) {
            $this->addCampaign();
        }
    }

    protected function filenames($directory)
    {
        return array_map(function ($path) {
            return pathinfo($path)['filename'];
        }, $this->newsletter->all($directory));
    }
}
