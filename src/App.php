<?php

namespace App;

use App\Counter\CounterRegistry;
use App\Reader\ReaderInterface;
use Throwable;

class App
{
    public function __construct(
        private CounterRegistry $counterRegistry,
    ) {
    }

    public function run(ReaderInterface $reader, $input, $options): int
    {
        try {
            $collection = $reader->read($input);
            return $this->counterRegistry->get($options[1])->count($collection, $options);
        } catch (Throwable $e) {
            error_log($e->getMessage() . PHP_EOL, 3, 'error.log');
            die($e->getMessage());
        }
    }
}