<?php

namespace App\Offer;

use ArrayIterator;
use Iterator;
use IteratorAggregate;

class OfferCollection implements OfferCollectionInterface, IteratorAggregate
{
    public function __construct(private array $offers)
    {
    }

    public function get(int $index): OfferInterface
    {
        return $this->offers[$index];
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->offers);
    }
}