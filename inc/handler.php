<?php

namespace Inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

require __DIR__ . '/../vendor/autoload.php';

use Inc\CoinmarketcapApi;

class Handler
{
    function __construct() {
        //api key as constructor parameter
        $coinmarkectapApi = new CoinmarketcapApi('API KEY HERE');
        $this->dogec_response = $coinmarkectapApi->requestCryptoQuotes('dogecash');
        $this->doge_response = $coinmarkectapApi->requestCryptoQuotes('dogecoin');
    }

    public function dogecData()
    {
        $circulating_supply = $this->dogec_response['data']['3672']['circulating_supply'];
        $price = $this->dogec_response['data']['3672']['quote']['USD']['price'];
        $market_cap =  $this->dogec_response['data']['3672']['quote']['USD']['market_cap'];
        $change7d = abs($this->dogec_response['data']['3672']['quote']['USD']['percent_change_7d']);
        $volume = $this->dogec_response['data']['3672']['quote']['USD']['volume_24h'];
        $percentage_supply = ($circulating_supply / 21000000) * 100;


        //time price calculator
        $future_price = $price;
        $days = 0;
        $current_date = date("m/d/Y");
        while($future_price < '1')
        {
            $future_price = $future_price*(($change7d * 0.01) + 1);
            $days = $days + 7;
        }
        $future_date = date('m/d/Y', strtotime($current_date. ' + '.$days.' days'));

        return [
            'circulating_supply' => number_format($circulating_supply, 0, '.', ','),
            'percentage_supply' => number_format($percentage_supply, 0, '.', ','),
            'price' => number_format($price, 2, '.', ','),
            'market_cap' => number_format($market_cap, 0, '.', ','),
            'change_7d' => number_format($change7d, 2, '.', ','),
            'volume' => number_format($volume, 0, '.', ','),
            'future_date' => $future_date
        ];
        
    }

    public function dogeData()
    {
        $circulating_supply = $this->doge_response['data']['74']['circulating_supply'];
        $price = $this->doge_response['data']['74']['quote']['USD']['price'];
        $market_cap =  $this->doge_response['data']['74']['quote']['USD']['market_cap'];
        $volume = $this->doge_response['data']['74']['quote']['USD']['volume_24h'];
        return [
            'circulating_supply' => number_format($circulating_supply, 0, '.', ','),
            'price' => number_format($price, 5, '.', ','),
            'market_cap' => number_format($market_cap, 0, '.', ','),
            'volume' => number_format($volume, 0, '.', ',')
        ];
        
    }
}