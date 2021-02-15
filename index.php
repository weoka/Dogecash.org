<?php

require __DIR__ . '/vendor/autoload.php';

function start()
{
    return new Inc\Handler();
}
$handler = start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogeCash - The Doge cryptocurrency that will reach $1</title>
    <meta name="description" content="DogeCash is an eco-friendly and community-governed doge cryptocurrency designed to be a store of value.">
    <link rel="icon" type="image/png" href="/images/favicon.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
</head>
<body>
    <div class="wrap">
            <header class="sticky">
            <div class="container"> 
                <!-- Logo -->
                <div class="logo"> <a href="/"><img class="img-responsive" src="images/dogecash.svg" alt="" ></a> </div>
                <nav class="navbar ownmenu navbar-expand-lg ">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav">
                    <li class="scroll active"><a href="#">Home</a></li>
                    <li class="scroll"> <a href="#about">About </a> </li>
                    <li class="scroll"> <a href="https://github.com/dogecash/dogecash/releases" target="_blank">Wallet </a> </li>
                    <li class="scroll"> <a href="https://coinmarketcap.com/" target="_blank">Coinmarketcap </a> </li>
                    <li class="scroll"> <a href="https://discord.gg/U8wfSKJkUa" target="_blank">Discord </a> </li>
                    <li class="scroll"> <a href="https://t.me/dogecashcoin" target="_blank">Telegram </a> </li>
                    <li class="scroll"> <a href="https://www.patreon.com/DogeCash" target="_blank">Patreon </a> </li>
                    <li class="scroll"> <a href="https://community.dogecash.org/">Community</a> </li>
                    </ul>
                </div>
                </nav>
            </div>
            <div class="clearfix"></div>
            </header>
            <!-- Hero -->
            <section class="simple-head" data-stellar-background-ratio="0.5" id="hme"> 
                <!-- Particles -->
                <div id="particles-js"></div>
                <div class="position-center-center cont-left">
                <div class="container">
                    <div class="row"> 
                    
                    <!-- Left Section -->
                    <div class="col-md-7">
                        <h1>The eco-friendly Doge cryptocurrency that will reach $1</h1>
                        <a href="#valuable" class="btn">Learn more</a> <a href="https://stakecube.net/app/exchange_v3/dogec_btc" target="_blank" class="btn btn-inverse">Buy now</a> </div>
                    
                    <!-- Text Section -->
                    <div class="col-md-5">
                        <div class="distri">
                        <h6>Current DogeCash supply</h6>
                        <!-- Progress -->
                        <div class="progress dogecash">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $handler->dogecData()['percentage_supply'] ?>%;" aria-valuenow="<?php echo $handler->dogecData()['percentage_supply'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo $handler->dogecData()['circulating_supply'] ?> DOGEC<small><?php echo $handler->dogecData()['percentage_supply'] ?>%</small></span> </div>
                        </div>

                        <h6>Current DogeCoin supply</h6>
                        <!-- Progress -->
                        <div class="progress dogecoin">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span><?php echo $handler->dogeData()['circulating_supply'] ?> DOGE<small>∞</small></span> </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- Content -->
            <div class="content">
                <!-- First section -->
                <section class="first-section padding-top-100 padding-bottom-100" id="about">
                    <div class="container"> 
                        
                        <!-- Why Choose Us  ROW-->
                        <div class="row">
                        <div class="col-md-7 margin-top-60" style="height: min-content;"> 
                            
                            <!-- Tittle -->
                            <div class="heading margin-bottom-20">
                            <h4>The <strong>efficiency</strong> made doge</h4>
                            </div>
                            <p>If Bitcoin was a country, it would be in the top 30 energy users worldwide.</p>
                            <p>Proof of work cryptocurrencies as Bitcoin, Litecoin or Dogecoin <b>are big electric wasters</b>. DogeCash, on the other hand, uses a Proof of stake network which is <b>several times more faster and less resource intensive</b>.</p>
                            <p>In a world where the environment is key, there is no place to inefficient waste.</p>
                        </div>
                        
                        <!-- Image -->
                        <div class="col-md-5 dogecash-img1 text-right"> <img src="images/img1.png" alt="DogeCash network" > </div>
                        </div>
                        
                        <!-- Services ROW -->
                        <div class="row"> 
                        
                        
                        <!-- Services -->
                        <div class="col-md-4">
                            <div class="ib-icon"> <i class="flaticon-money"></i> </div>
                            <div class="ib-info">
                            <h4 class="h6">A real way to save value</h4>
                            <p>A USD Dollar gets devaluated a 1.5% each year. DogeCoin gets devalued a 5% each year. DogeCash will only have 21 million coins, that is to say, the price will always tend to increase.</p>
                            </div>
                        </div>
                        
                        <!-- Services -->
                        <div class="col-md-4">
                            <div class="ib-icon"> <i class="flaticon-profits"></i> </div>
                            <div class="ib-info">
                            <h4 class="h6">Stake your funds and earn DogeC</h4>
                            <p>DogeCash network is based on Proof of Stake. That means that you don't need electric power to validate transactions but DOGEC. Only having some DOGEC in your wallet will be enough to verify transactions and get a passive income in return.</p>
                            </div>
                        </div>
                        
                        <!-- Services -->
                        <div class="col-md-4">
                            <div class="ib-icon"> <i class="flaticon-secure-shield"></i> </div>
                            <div class="ib-info">
                            <h4 class="h6">Full Protection</h4>
                            <p>Based on Pivx, DogeCash has privacy in its core. You'll be able to be your own bank with full control of your digital assets.</p>
                            </div>
                        </div>                            
                        </div>
                    </div>
                </section>

                <!-- Second section -->
                <section class="distri padding-top-100 padding-bottom-100 light-bg" id="valuable">
                    <div class="container">
                    <div class="row"> 
                        
                        <!-- Token  -->
                        <div class="col-lg-7">
                                <h3>Valuable by definition</h3>
                        <p>The more coins a cryptocurrency has, the less will worth in the future. That's why DogeCash, which was thought as a way to save value, will only have 21 million DOGEC. Right now there are in circulation:</p>
                        
                        <!-- Progress -->
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $handler->dogecData()['percentage_supply'] ?>%;" aria-valuenow="<?php echo $handler->dogecData()['percentage_supply'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo $handler->dogecData()['circulating_supply'] ?> DOGEC<small><?php echo $handler->dogecData()['percentage_supply'] ?>%</small></span> </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <h6> $<?php echo $handler->dogecData()['price'] ?></h6>
                            <span>Current price</span> </div>
                            <div class="col">
                            <h6> $<?php echo $handler->dogecData()['volume'] ?></h6>
                            <span>Volume</span> </div>
                            <div class="col">
                            <h6> $<?php echo $handler->dogecData()['market_cap'] ?></h6>
                            <span>Market cap</span> </div>
                        </div>
                        
                        <!-- CountdownEnd -->
                        <div class="countdown">
                            <h6 class="padding-top-10">In the meanwhile, DogeCoin numbers...</h6>
                            <!-- Progress -->
                            <div class="progress dogecoin">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span><?php echo $handler->dogeData()['circulating_supply'] ?> DOGE<small>∞</small></span> </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <h6> $<?php echo $handler->dogeData()['price'] ?></h6>
                                <span>Current price</span> </div>
                                <div class="col">
                                <h6> $<?php echo $handler->dogeData()['volume'] ?></h6>
                                <span>Volume</span> </div>
                                <div class="col">
                                <h6> $<?php echo $handler->dogeData()['market_cap'] ?></h6>
                                <span>Market cap</span> </div>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Total Distribution -->
                        <div class="col-lg-5">
                        <h3>DogeCash will reach $1</h3>
                        <p>It's a matter of time. Considering the growth of the last 7 days, DogeCash will reach $1 in:</p>
                        <div class="countdown-all">                                 
                            <ul class="row">
                            <!-- Days -->
                            <li class="col-md-3">
                                <article> <span class="days">00</span>
                                <p class="days_ref">Days</p>
                                </article>
                            </li>
                            <!-- Hours -->
                            <li class="col-md-3">
                                <article> <span class="hours">00</span>
                                <p class="hours_ref">Hours</p>
                                </article>
                            </li>
                            <!-- Mintes -->
                            <li class="col-md-3">
                                <article><span class="minutes">00</span>
                                <p class="minutes_ref">Minutes</p>
                                </article>
                            </li>
                            <!-- Seconds -->
                            <li class="col-md-3">
                                <article><span class="seconds">00</span>
                                <p class="seconds_ref">Seconds</p>
                                </article>
                            </li>
                            </ul>
                            <a href="https://discord.gg/U8wfSKJkUa" target="_blank" class="btn">Say hello</a> <a href="https://stakecube.net/app/exchange_v3/dogec_btc" target="_blank" class="btn btn-inverse">Buy Now</a> 
                            
                        </div>
                        </div>
                    </div>
                    </div>
                </section>

                <!-- Third section -->
                <section class="about"> 
                    <!-- Right Background -->
                    <div class="main-page-section half_left_layout">
                        <div class="main-half-layout half_right_layout"> </div>
                        <!-- Left Content -->
                        <div class="main-half-layout-container half_right_layout">
                        <div class="about-us-con">
                            <h3>Self-governance at its purest</h3>
                            <p>The only ones who can control DogeCash are Doges. With DogeCash, DogeNode owners will decide the ecosystem future and will vote on what the raised funds will be spent.</p>
                            <ul class="count-info row">
                            <li class="col"> <span class="counter">1300</span><span>+</span>
                                <p>Masternodes</p>
                            </li>
                            </ul>
                            <a href="https://www.dogec.io/whitepaper.pdf" target="_blank" class="btn">White Paper</a> <a href="https://stakecube.net/app/exchange_v3/dogec_btc" target="_blank" class="btn btn-inverse">Buy your masternode</a> </div>
                        </div>
                    </div>
                </section>

                <!-- Fourth section -->
                <section class="dev-activ text-center padding-top-100 padding-bottom-100" id="activity">
                    <div class="container">
                    <div class="sm-intro">
                        <h2>A coin is nothing without people</h2>
                        <p>DogeCash has been kicking around since 2018 with a dedicated team and a strong community base.</p>
                    </div>
                    <ul class="row margin-top-50 margin-bottom-50">
                        <li class="col"> <i class="fab fa-github"></i> <span><span class="counter">4</span> hrs Ago</span>
                        <p>Since last Commit</p>
                        </li>
                        <li class="col"><i class="fab fa-discord"></i>  <span><span class="counter">1800</span>+</span>
                        <p>Discord members</p>
                        </li>
                        <li class="col"><i class="fab fa-telegram"></i> <span><span class="counter">1200</span>+</span>
                        <p>Telegram members</p>
                        </li>
                        <li class="col"><i class="fas fa-users"></i> <span  class="counter">5</span>
                        <p>Team Members</p>
                        </li>
                    </ul>
                    <a href="https://discord.gg/U8wfSKJkUa" target="_blank" class="btn">Say hello</a> <a href="https://github.com/dogecash" target="_blank" class="btn btn-inverse">Github</a> </div>
                </section>

                <!-- Prefooter -->
                <section class="community-sec padding-top-100 padding-bottom-80">
                    <div class="container">
                    <div class="row">
                        <div class="col">
                        <div class="sm-intro">
                            <h2>Join our community</h2>
                            <ul class="socials">
                            <li><a href="https://twitter.com/dogecashcoin" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://github.com/dogecash" target="_blank"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://t.me/dogecashcoin" target="_blank"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="https://discord.gg/U8wfSKJkUa" target="_blank"><i class="fab fa-discord"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCMUkFPoSEYewnl8lbDXD2Gw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>    
            </div>
        <!-- Footer -->
        <footer id="contact">
            <!-- Rights -->
            <div class="container">
                <div class="row">
                <div class="col">
                    <p>Dogecash.org is NOT the official site of the DogeCash project</p>
                </div>
                <div class="col text-right">
                <a href="https://dogec.io/" target="_blank">Official DogeCash website </a>
                <a href="https://github.com/weoka/Dogecash.org" target="_blank">This site has his own repository. You can change anything from here</a>  </div>
                </div>
            </div>
        </footer>
    </div>

<!-- Script -->
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.bundle.js"></script> 
<script src="js/particles.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/main.js"></script> 
<script>
    $(document).ready(function($) {

/*-----------------------------------------------------------------------------------*/
/* 	Counter Timer
/*-----------------------------------------------------------------------------------*/
$('.countdown-all').downCount({
     date: '<?php echo $handler->dogecData()['future_date']; ?> 12:00:00' // M/D/Y
});
/*-----------------------------------------------------------------------------------*/
/* 	COUNTER
/*-----------------------------------------------------------------------------------*/
$('.counter').counterUp({
    delay: 50,
    time: 2000
});

});
</script>
</body>
</html>