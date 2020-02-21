<?php

namespace Artisanpay\WhatsappNotify;

use Symfony\Component\HttpClient\HttpClient;

class WhatsappNotify
{
    private  $client;
    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function send(string $to , string $content)
    {
        try {
            $this->client->request('POST', config('whatsapp.server_url'), [
                'json' => [
                    'to' => $to,
                    'content' => $content,
                ]
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
