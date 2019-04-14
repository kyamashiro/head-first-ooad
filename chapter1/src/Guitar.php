<?php

namespace Chapter1;

class Guitar
{
    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var float
     */
    private $price;

    /**
     * @var GuitarSpec
     */
    private $spec;

    /**
     * Guitar constructor.
     * @param string $serialNumber
     * @param float $price
     * @param GuitarSpec $spec
     */
    public function __construct(string $serialNumber, float $price, GuitarSpec $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return GuitarSpec
     */
    public function getSpec(): GuitarSpec
    {
        return $this->spec;
    }
}
