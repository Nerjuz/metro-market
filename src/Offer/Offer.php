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

class Offer implements OfferInterface
{
    public function __construct(private int $offerId, private string $productTitle, private int $vendorId, private float $price,)
    {
    }

    public function gertOfferId(): int
    {
        return $this->offerId;
    }

    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
