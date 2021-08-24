<?php

namespace App\Counter;

use App\Offer\OfferCollectionInterface;
use App\Offer\OfferInterface;

class PriceRangeCounter implements CounterInterface
{

    public function count(OfferCollectionInterface $offerCollection, array $params): int
    {
        $counter = 0;
        foreach ($offerCollection as $offer){
            assert($offer instanceof OfferInterface);
            $price = $offer->getPrice();
            if($price >= (float)$params[2] && $price <= (float)$params[3]){
                $counter++;
            }
        }

        return $counter;
    }
}