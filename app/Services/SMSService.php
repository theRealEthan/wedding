<?php

namespace App\Services;

use GuzzleHttp\Client;

class SMSService
{
    const API_KEY = '321fa7ad-3bb9-4ae2-9ba7-9895f1e8b287';
    const API_SECRET = '52ccc9eb-fabd-4c26-a8ae-b48479e3bb2a';
    protected $client;
    protected $apiKey;
    protected $apiSecret;

    public function __construct()
    {
        $this->apiKey = self::API_KEY;
        $this->apiSecret = self::API_SECRET;
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://rest.smsportal.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }

    public function sendSMS($message, $destination)
    {
        $credentials = base64_encode("{$this->apiKey}:{$this->apiSecret}");
        $response = $this->client->request('POST', 'bulkmessages', [
            'headers' => [
                'Authorization' => "Basic {$credentials}",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'messages' => [
                    [
                        'content' => $message,
                        'destination' => $destination,
                    ],
                ],
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            // Handle success
            $body = $response->getBody();
            $result = json_decode($body);
            return [
                'success' => true,
                'result' => $result,
            ];
        } else {
            // Handle failure
            return [
                'success' => false,
                'status' => $response->getStatusCode(),
            ];
        }
    }
}
