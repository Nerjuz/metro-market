<?php

declare(strict_types=1);

/*
 * This file is part of contao.org.
 *
 * (c) Leo Feyer
 *
 * @license proprietary
 */

namespace App\Reader;

use App\Offer\Offer;
use App\Offer\OfferCollection;
use App\Offer\OfferCollectionInterface;

class JsonReader implements ReaderInterface
{
    public function read(string $input): OfferCollectionInterface
    {
        $array = json_decode($input, true);

        return new OfferCollection($this->getOffers($array));
    }

    private function getOffers(array $array): array
    {
        $offers = [];

        foreach ($array as $item) {
            $offers[] = new Offer($item['offerId'], $item['productTitle'], $item['vendorId'], $item['price']);
        }

        return $offers;
    }
}
