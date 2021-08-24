<?php

namespace App\Offer;

interface OfferInterface
{
    public function gertOfferId(): int;

    public function getProductTitle(): string;

    public function getVendorId(): int;

    public function getPrice(): float;
}