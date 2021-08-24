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

interface OfferInterface
{
    public function gertOfferId(): int;

    public function getProductTitle(): string;

    public function getVendorId(): int;

    public function getPrice(): float;
}
