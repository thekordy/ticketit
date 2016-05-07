<?php

// to change values based on Laravel version
$laravel_version = substr(\App::VERSION(), 0, 3);

return [
    'front' => [
        'theme' => 'standard',

        'login-url' => ($laravel_version == "5.2") ? '/login' : '/auth/login',

        'logout-url' => ($laravel_version == "5.2") ? '/logout' : '/auth/logout',

        'register-url' => '/register'
    ],
    
    'standard' => [
        'master' => 'ticketit::standard.master',
    ],
    
    'admin' => [],
    
];