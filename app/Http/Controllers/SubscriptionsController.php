<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encryption\Signature;
use App\Repositories\Subscription;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;

class SubscriptionsController
{
    use ProvidesConvenienceMethods;

    protected $signature;

    protected $subscription;

    public function __construct(Signature $signature, Subscription $subscription)
    {
        $this->signature = $signature;
        $this->subscription = $subscription;
    }

    public function confirm($email, Request $request)
    {
        if (! $this->signature->check($request->sign, $email)) {
            return response(403);
        }

        $this->subscription->subscribe($email, [
            'language' => $request->hl ?? 'en',
        ]);

        // TODO: Add success message.
        return view('success');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'privacy' => ['accepted'],
        ]);

        if ($this->subscription->isMember($request->email)) {
            return ['message' =>  __('You are already subscribed.')];
        }

        // TODO: Send double-opt-in mail.
        $url = url("/newsletter/$request->email?") . http_build_query([
            'hl' => $request->locale,
            'sign' => $this->signature->make($request->email),
        ]);

        return ['message' =>  __('Thank you. You should receive a message to confirm your e-mail address')];
    }

    public function destroy($email)
    {
        if (! $this->signature->check($this->request->sign, $email)) {
            return response(403);
        }

        $this->subscription->unsubscribe($email);

        return ['message' =>  __('No worries! We are here when you get back.')];
    }
}
