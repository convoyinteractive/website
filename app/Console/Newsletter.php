<?php

namespace App\Console;

use Illuminate\Console\Command;
use App\Repositories\Mailchimp as MailchimpRepository;
use App\Repositories\Newsletter as NewsletterRepository;

class Newsletter extends Command
{
    protected $mailchimp;

    protected $newsletter;

    protected $campaigns = [];

    protected $signature = 'newsletter';

    protected $description = 'Create and send a new newsletter campaign';

    public function __construct(MailchimpRepository $mailchimp, NewsletterRepository $newsletter)
    {
        $this->mailchimp = $mailchimp;
        $this->newsletter = $newsletter;

        parent::__construct();
    }

    public function handle()
    {
        $this->makeCampaign()
            ->storeCampaigns()
            ->showCampaigns()
            ->sendCampaigns();

        $this->info('Done.');
    }

    protected function makeCampaign()
    {
        $locale = $this->choice('Choose a language', ['de', 'en']);

        $name = $this->choice('Choose a newsletter', $this->filenames($locale));

        $newsletter = $this->newsletter->fetch("{$locale}/{$name}");
        $newsletter->locale = $locale;

        $this->campaigns[] = $newsletter;

        if ($this->confirm('Do you wish to add another campaign?')) {
            $this->makeCampaign();
        }

        return $this;
    }

    public function sendCampaigns()
    {
        if (! $this->confirm('Do you want to send the campaigns now?')) {
            return $this;
        }

        $progress = $this->output->createProgressBar(count($this->campaigns));
        $progress->start();

        foreach ($this->campaigns as $campaign) {
            if ($this->mailchimp->sendCampaign($campaign->get('id')) === true) {
                $campaign->send = true;
            }

            $progress->advance();
        }

        $progress->finish();

        $this->showCampaigns();
        $this->info('Your campaigns are stored at mailchimp.');

        return $this;
    }

    protected function showCampaigns()
    {
        $this->line(PHP_EOL);
        $this->table(['Id', 'Title', 'Send'], collect($this->campaigns)->toArray());

        return $this;
    }

    public function storeCampaigns()
    {
        $progress = $this->output->createProgressBar(count($this->campaigns));
        $progress->start();

        foreach ($this->campaigns as $campaign) {
            $this->mailchimp->createCampaign($campaign);
            $progress->advance();
        }

        $progress->finish();

        return $this;
    }

    protected function filenames($directory)
    {
        return array_map(function ($path) {
            return pathinfo($path)['filename'];
        }, $this->newsletter->all($directory));
    }
}
