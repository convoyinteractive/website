<?php

namespace App\Repositories;

use App\Email;
use DrewM\MailChimp\MailChimp as Client;

class Mailchimp
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function createCampaign(Email $email, $list = null)
    {
        $list = $list ?: config('mailchimp.lists.default');

        $response = $this->client->post('campaigns', [
            'type' => 'regular',
            'recipients' => [
                'list_id' => $list,
                'segment_opts' => [
                    'match' => 'all',
                    'conditions' => [
                        [
                            'condition_type' => 'Language',
                            'field' => 'language',
                            'op' => 'is',
                            'value' => $email->get('locale'),
                        ]
                    ]
                ],
            ],
            'settings' => $this->campaignSettings([
                'subject_line' => $email->get('meta.subject'),
                'title' => $email->get('meta.title'),
            ]),
        ]);

        $email->id = $response['id'];

        $this->client->put("campaigns/{$email->get('id')}/content", [
            'html' => $email->html(),
        ]);

        return $email;
    }

    public function sendCampaign($id)
    {
        return $this->client->post("campaigns/{$id}/actions/send");
    }

    protected function campaignSettings($options = [])
    {
        return array_merge([
            'subject_line' => config('mailchimp.from.name'),
            'title' => config('mailchimp.from.name'),
            'from_name' => config('mailchimp.from.name'),
            'reply_to' => config('mailchimp.from.mail'),
            'auto_footer' => false,
        ], $options);
    }
}
