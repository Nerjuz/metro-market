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

use App\Offer\OfferCollectionInterface;

interface ReaderInterface
{
    public function read(string $input): OfferCollectionInterface;
}
