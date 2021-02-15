<?php

namespace Inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

use GuzzleHttp;

class CoinmarketcapAPI
{
    function __construct($apikey, $type) {
        $this->apikey = $apikey;
        $this->client = new GuzzleHttp\Client();
        if($type == "sandbox")
        {
            $this->cmc_uri = 'https://sandbox-api.coinmarketcap.com/v1/';
        }
        else
        {
            $this->cmc_uri = 'https://pro-api.coinmarketcap.com/v1/';
        }
    }

    public function requestCryptoQuotes($crypto){
        $request = $this->client->request('GET', $this->cmc_uri . 'cryptocurrency/quotes/latest?slug='.$crypto,
        [
            'headers' => ['X-CMC_PRO_API_KEY' => $this->apikey]
        ]);
        return json_decode($request->getBody(), true);
    }
}