<?php

namespace App\Repositories;

use DrewM\MailChimp\MailChimp;

class Subscription
{
    protected $mailchimp;

    public function __construct(MailChimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function isMember($email, $list = null)
    {
        $member = $this->mailchimp->get($this->endpoint($email, $list));

        return $member['status'] === 'subscribed';
    }

    public function subscribe($email, $options = [], $list = null)
    {
        return $this->mailchimp->put(
            $this->endpoint($email, $list),
            array_merge([
                'email_address' => $email,
                'status' => 'subscribed',
            ], $options)
        );
    }

    public function unsubscribe($email, $list = null)
    {
        return $this->mailchimp->delete($this->endpoint($email, $list));
    }

    protected function endpoint($email, $list = null)
    {
        $list = $list ?: config('mailchimp.lists.default');
        $user = md5(strtolower($email));

        return "lists/$list/members/$user";
    }
}
