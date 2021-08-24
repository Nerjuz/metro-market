<?php

use App\App;
use App\Counter\CounterRegistry;
use App\Counter\PriceRangeCounter;
use App\Counter\VendorIdCounter;
use App\Reader\JsonReader;

require_once('vendor/autoload.php');

$countersRegistry = new CounterRegistry(
    [
        'count_by_price_range' => new PriceRangeCounter(),
        'count_by_vendor_id' => new VendorIdCounter(),
    ]
);

$input = file_get_contents('https://run.mocky.io/v3/2797e20d-5db5-43d7-871d-69822b9a770a');

$counter = new App($countersRegistry, new JsonReader());

printf('Found offers: %d', $counter->count($input, $argv));
