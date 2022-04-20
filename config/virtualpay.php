<?php

return [

    /**
     * Public Key From ChargeMoney Dashboard
     *
     */
    'mid' => getenv('VIRTUALPAY_MID', 'Axes'),
    'api_key' => getenv('VIRTUALPAY_API_KEY', 'roKRWwLZqvQfPRlWQn7V2OQm7ey99s2T'),
    'demo_mid' => getenv('VIRTUALPAY_DEMO_MID', 'AXSE'),
    'demo_api_key' => getenv('VIRTUALPAY_DEMO_API_KEY', 'QrV73GavwVnm67rBIxXClhNk5obS5qXB'),
    'api_secret' => getenv('VIRTUALPAY_API_SECRET', '6rsswxvT0G4y'),
    'private_key' => getenv('VIRTUALPAY_PRIVATE_KEY'),
];
