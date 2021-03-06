<?php

declare(strict_types=1);

/*
 * This file is part of contao.org.
 *
 * (c) Leo Feyer
 *
 * @license proprietary
 */

namespace App\Counter;

use Exception;

class CounterRegistry
{
    public function __construct(private array $counters)
    {
    }

    /**
     * @throws Exception
     */
    public function get(string $key): CounterInterface
    {
        if (!isset($this->counters[$key])) {
            throw new Exception('Counter not found');
        }

        return $this->counters[$key];
    }
}
