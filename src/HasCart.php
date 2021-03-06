<?php

namespace Tefo\Cart;

interface HasCart
{

    /**
     * Get the identifier of the HasCart item.
     *
     * @return int|string
     */
    public function getHasCartIdentifier();

    /**
     * Get the description or title of the HasCart item.
     *
     * @return string|null
     */
    public function getHasCartDescription(): ?string;

    /**
     * Get the price of the HasCart item.
     *
     * @return float|null
     */
    public function getHasCartPrice(): ?float;
}
