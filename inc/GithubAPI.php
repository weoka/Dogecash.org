<?php

namespace Inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

use GuzzleHttp;

class GithubAPI
{
    function __construct() {
        $this->client = new GuzzleHttp\Client();
        $this->cmc_uri = 'https://api.github.com/';
    }

    public function requestActivity($organization){
        $request = $this->client->request('GET', $this->cmc_uri . "orgs/$organization/events");
        return json_decode($request->getBody(), true); 
    }
}