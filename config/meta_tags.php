<?php

use Butschster\Head\MetaTags\Viewport;

return [
    /*
     * Meta title section
     */
    'title' => [
        'default' => env('APP_NAME').'|agence web|création de sites professionnels',
        'separator' => '-',
        'max_length' => 255,
    ],


    /*
     * Meta description section
     */
    'description' => [
        'default' => 'Nous créons vos de sites web, site vitrine, site e-commerce personnalisé pour startup, entreprises et particuliers. Cliquez pour avoir un devis gratuit.',
        'max_length' => 255,
    ],


    /*
     * Meta keywords section
     */
    'keywords' => [
        'default' => 'dev passion academy, site web vitrine, agence web, e-commerce, market-place, portfolio, application web, application mobile, yaounde, cameroun',
        'max_length' => 255
    ],

    /*
     * Default packages
     *
     * Packages, that should be included everywhere
     */
    'packages' => [
        'jquery', 'bootstrap'
    ],

    'charset' => 'utf-8',
    'robots' => null,
    'viewport' => Viewport::RESPONSIVE,
    'csrf_token' => true,
];