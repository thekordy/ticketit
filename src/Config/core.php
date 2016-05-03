<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application/Website name
    |--------------------------------------------------------------------------
    |
    | To be used in the views and other places, by default it gets the name from 
    | url parameter at config/app.php file, then parse it for the name, and make 
    | first char uppercase
    | ex. url('http://mysite.com') or (in .env) APP_URL=http://mysite.com -> Mysite
    | Of course you can change it here as you like.
    | ex. 'site-name' => 'My Site Name',
    |
    */
    'site-name' => ucfirst(explode('.', parse_url(config('app.url'))['host'])[0]),
];