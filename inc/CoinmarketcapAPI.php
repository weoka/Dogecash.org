<?php

namespace Inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

use GuzzleHttp;
use DateTime;
use DateInterval;

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

    public function requestCryptoQuotes($crypto, $update_time = 15){
        if( file_exists(__DIR__ . "/../storage/$crypto.json") )
        {
            $request = file_get_contents(__DIR__ . "/../storage/$crypto.json");
            $decoded = json_decode($request, true);
            $filedate = new DateTime($decoded['status']['timestamp']);

            //check if file is older than required
            if($filedate->format('Y-m-d H:i:s') > date('Y-m-d H:i:s', strtotime("-$update_time minutes")))
            {
                return $decoded;
            }
        }
        //create json files with coinmarketcap requests
        $request = $this->client->request('GET', $this->cmc_uri . 'cryptocurrency/quotes/latest?slug='.$crypto,
        [
            'headers' => ['X-CMC_PRO_API_KEY' => $this->apikey]
        ]);
        if (!is_dir(__DIR__ . "/../storage/")) {
            mkdir(__DIR__ . "/../storage/");
        }
        file_put_contents(__DIR__ . "/../storage/$crypto.json", $request->getBody());
        return json_decode($request->getBody(), true); 
    }
}