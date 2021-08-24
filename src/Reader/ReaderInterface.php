<?php

namespace App\Reader;

use App\Offer\OfferCollectionInterface;

interface ReaderInterface
{
    public function read(string $input): OfferCollectionInterface;
}