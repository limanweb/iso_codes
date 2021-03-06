<?php 

return [
    'use_local_cache' => true,
    'use_cache' => true,
    'sections' => [
        'iso_country' => [
            'config_path' => 'limanweb.iso_codes.iso_country',
            'trans_path' => 'limanweb/iso_codes::iso_country',
            'trans_key' => 'alpha3',
            'data_key' => 'alpha3',
        ],
        'iso_currency' => [
            'config_path' => 'limanweb.iso_codes.iso_currency',
            'trans_path' => 'limanweb/iso_codes::iso_currency',
            'trans_key' => 'alpha',
            'data_key' => 'alpha',
        ],
    ],
];