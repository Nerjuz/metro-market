<?php

declare(strict_types=1);

/*
 * This file is part of contao.org.
 *
 * (c) Leo Feyer
 *
 * @license proprietary
 */

namespace App\Offer;

use Iterator;

interface OfferCollectionInterface
{
    public function get(int $index): OfferInterface;

    public function getIterator(): Iterator;
}
