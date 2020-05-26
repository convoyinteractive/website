<?php

namespace App\Providers;

use DrewM\MailChimp\MailChimp;
use Illuminate\Support\ServiceProvider;

class MailchimpServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure('mailchimp');

        $this->app->singleton(MailChimp::class, function ($app) {
            return new MailChimp(config('mailchimp.key'));
        });
    }
}
