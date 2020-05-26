<?php

namespace App\Http\Controllers;

class SubscriptionsController
{
    public function confirm($email)
    {
        // Validate the signature

        // Subscribe the user to the list.
        // Show success page.
        return view('success');
    }

    public function store()
    {
        // Validate the request

        // Check if user already exists.
        // return ['message' =>  __('You are already subscriped.')];

        // Send double-opt-in mail.
        // The confirmation link must contain the email as an url paarameter
        // and query parameters for the locale and signature.
        return ['message' =>  __('Thank you. You should receive a message to confirm your e-mail address')];
    }

    public function destroy($email)
    {
        // Validate the signature

        // Unsubscribe the user
        return ['message' =>  __('No worries! We are here when you get back.')];
    }
}
