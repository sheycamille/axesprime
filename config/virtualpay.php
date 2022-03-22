<?php

return [

    /**
     * Public Key From ChargeMoney Dashboard
     *
     */
    'mid' => getenv('VIRTUALPAY_MID', 'Axes'),
    'api_key' => getenv('VIRTUALPAY_API_KEY', 'roKRWwLZqvQfPRlWQn7V2OQm7ey99s2T'),
    'api_secret' => getenv('VIRTUALPAY_API_SECRET', '6rsswxvT0G4y'),
    'private_key' => getenv('VIRTUALPAY_PRIVATE_KEY'),
];
