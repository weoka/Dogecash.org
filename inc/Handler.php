<?php

namespace Inc;

if(!function_exists('start')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
endif;

require __DIR__ . '/../vendor/autoload.php';


use Inc\CoinmarketcapAPI;
use Inc\GithubAPI;
use Dotenv;
use DateTime;
use DateTimeZone;

class Handler
{
    function __construct() {
        //load enviroment variable
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        //load coinmarketcap api
        $coinmarketcapkey = $_ENV['COINMARKETCAP_MODE'] == 'sandbox' ? $_ENV['CMC_SANDBOX_APIKEY'] : $_ENV['CMC_PRODUCTION_APIKEY'];
        $updatetime = isset($_ENV['UPDATE_TIME']) ? $_ENV['UPDATE_TIME'] : 15;
        $coinmarkectapApi = new CoinmarketcapApi($coinmarketcapkey, $_ENV['COINMARKETCAP_MODE']);
        $this->dogec_response = $coinmarkectapApi->requestCryptoQuotes('dogecash', $updatetime);
        $this->doge_response = $coinmarkectapApi->requestCryptoQuotes('dogecoin', $updatetime);
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

    public function lastActivity($project)
    {
        $github = new GithubAPI();
        $response = $github->requestActivity($project)[0]['created_at'];

        $lastActivity = new DateTime($response, new DateTimeZone('CET'));
        $currentTime = new DateTime("now", new DateTimeZone('CET') );

        $diff = $currentTime->diff($lastActivity);
        $days = $diff->days;
        $hours = $diff->h;
        $totalhours = $hours + ($days * 24);

        if($totalhours > 24)
        {
            return [
                "number" => $days,
                "string" => $days > 1 ? "days" : "day"
            ];            
        }

        return [
            "number" => $hours,
            "string" => $hours > 1 ? "hours" : "hour"
        ];   
    }
}