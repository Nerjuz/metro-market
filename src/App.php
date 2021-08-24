<?php

declare(strict_types=1);

/*
 * This file is part of contao.org.
 *
 * (c) Leo Feyer
 *
 * @license proprietary
 */

namespace App;

use App\Counter\CounterRegistry;
use App\Reader\ReaderInterface;
use Throwable;

class App
{
    public function __construct(private CounterRegistry $counterRegistry, private ReaderInterface $reader)
    {
    }

    public function count($input, $options): int
    {
        try {
            $collection = $this->reader->read($input);

            return $this->counterRegistry->get($options[1])->count($collection, $options);
        } catch (Throwable $e) {
            error_log($e->getMessage().PHP_EOL, 3, 'error.log');
            die($e->getMessage());
        }
    }
}
