
# Dogecash.org website

## Requirements
In order to to run this site you'll need:

 - A PHP server
 - Composer
 - A coinmarketcap API Key

## Deployment

Having your repository ready, run:

    composer install

That command will download all the libraries the project needs. If you don't have composer installed, take a look at: https://www.hostinger.com/tutorials/how-to-install-composer

Now you'll need to modify the *.env.example* file to just *.env*. (If you can't see the file, be aware that your file manager is showing hidden files. If  that isn't the case, google: show hidden files [**your os**])

Once you have your .env, open it with any code editor and fill the fields that you need. For example.

    #COINMARKET CAP MODE: live or sandbox (DEFAULT IS live)
    COINMARKETCAP_MODE=sandbox
    
    #API KEY HERE
    CMC_PRODUCTION_APIKEY=YOUR_APIKEY_HERE
    CMC_SANDBOX_APIKEY=f7e2fc24-bef7-4f3b-bb79-657679b4a81a
    #UPDATE RATE, IN MINUTES (DEFAULT IS 15)
    UPDATE_TIME=15

Enjoy!
