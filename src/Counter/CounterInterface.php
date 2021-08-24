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

use App\Offer\OfferCollectionInterface;

interface CounterInterface
{
    public function count(OfferCollectionInterface $offerCollection, array $params): int;
}
