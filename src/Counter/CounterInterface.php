<?php

namespace App\Counter;

use App\Offer\OfferCollectionInterface;

interface CounterInterface
{
    public function count(OfferCollectionInterface $offerCollection, array $params): int;
}