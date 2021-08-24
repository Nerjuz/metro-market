<?php

namespace App\Counter;

use App\Offer\OfferCollectionInterface;
use App\Offer\OfferInterface;

class VendorIdCounter implements CounterInterface
{

    public function count(OfferCollectionInterface $offerCollection, array $params): int
    {
        $counter = 0;
        foreach ($offerCollection as $offer){
            assert($offer instanceof OfferInterface);

            if($offer->getVendorId()=== (int)$params[2]){
                $counter++;
            }
        }

        return $counter;
    }
}