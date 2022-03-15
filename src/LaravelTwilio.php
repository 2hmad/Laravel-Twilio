<?php

namespace Dot2hmad\LaravelTwilio;

use Twilio\Rest\Client;

class LaravelTwilio
{
    /** @var Twilio\Rest\Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function notify(string $number, string $message)
    {
        return $this->client->messages->create($number, [
            'from' => config('laraveltwilio.sms_from'),
            'body' => $message
        ]);
    }
}
