<?php

namespace VPremiss\LivewireNonceable\Interfaces;

interface Noncing
{
    /**
     * Should contain descriptive string as cache keys and how many seconds they'd last for as values.
     *
     * Example: `['searching' => 5, 'heavy-processing' => 10]`
     * 
     * @return array<string, int>
     */
    public function getNonces(): array;

    /**
     * Should make the cache key unique.
     * 
     * Example: `(string)$userId`
     * 
     * @return string 
     */
    public function getNonceUniqueId(): string;
}
