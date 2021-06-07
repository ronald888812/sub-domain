<?php
return [
    // we are going to set this in a future middleware
    'active' => null,
    'sites' => [
        'en' => [
            'default' => true,
            'locale' => 'en',
            'domain' => 'http://laravel-sub-domain.com',
            'label' => 'English',
        ],
        'id' => [
            'locale' => 'id',
            'domain' => 'http://product1.laravel-sub-domain.com',
            'label' => 'Indonesia',
        ],
    ],
];