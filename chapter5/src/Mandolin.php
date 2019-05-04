<?php


namespace Chapter5;

class Mandolin extends Instrument
{
    /**
     * Mandolin constructor.
     * @param string $serialNumber
     * @param float $price
     * @param MandolinSpec $spec
     */
    public function __construct(string $serialNumber, float $price, MandolinSpec $spec)
    {
        parent::__construct($serialNumber, $price, $spec);
    }
}
