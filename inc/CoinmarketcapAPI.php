<?php

namespace inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

use GuzzleHttp;

class CoinmarketcapApi
{
    function __construct($apikey) {
        $this->apikey = $apikey;
        $this->client = new GuzzleHttp\Client();
        $this->cmc_uri = 'https://pro-api.coinmarketcap.com/v1/';
    }

    public function requestCryptoQuotes($crypto){
        $request = $this->client->request('GET', $this->cmc_uri . 'cryptocurrency/quotes/latest?slug='.$crypto,
        [
            'headers' => ['X-CMC_PRO_API_KEY' => $this->apikey]
        ]);
        return json_decode($request->getBody(), true);
    }
}