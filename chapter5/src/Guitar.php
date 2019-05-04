<?php


namespace Chapter5;

class Guitar extends Instrument
{
    /**
     * Guitar constructor.
     * @param string $serialNumber
     * @param float $price
     * @param GuitarSpec $spec
     */
    public function __construct(string $serialNumber, float $price, GuitarSpec $spec)
    {
        parent::__construct($serialNumber, $price, $spec);
    }
}
