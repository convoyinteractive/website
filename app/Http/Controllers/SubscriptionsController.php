<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Subscription;

class SubscriptionsController
{
    protected $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function confirm($email, Request $request)
    {
        // Validate the signature.

        return $this->subscription->subscribe($email, [
            'language' => $request->hl ?? 'en',
        ]);

        return view('success'); // Add success message.
    }

    public function store()
    {
        // Validate the request

        if ($this->subscription->isMember($request->email)) {
            return ['message' =>  __('You are already subscribed.')];
        }

        // Send double-opt-in mail.
        // The confirmation link must contain the email as an url paarameter
        // and query parameters for the locale and signature.

        return ['message' =>  __('Thank you. You should receive a message to confirm your e-mail address')];
    }

    public function destroy($email)
    {
        // Validate the signature

        $this->subscription->unsubscribe($email);

        return ['message' =>  __('No worries! We are here when you get back.')];
    }
}
