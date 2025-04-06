<?php

namespace Eriny\Composer;

use GuzzleHttp\Client;

class App {
    public function get($url)
    {
        $client = new Client();
        $response = $client->request('GET', $url);
        $body = $response->getBody();
        $data = json_decode($body);

        echo $body."<br><br>";

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}