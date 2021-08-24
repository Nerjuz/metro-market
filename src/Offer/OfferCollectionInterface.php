<?php

namespace App\Offer;

use Iterator;

interface OfferCollectionInterface
{
    public function get(int $index): OfferInterface;
    public function getIterator(): Iterator;
}