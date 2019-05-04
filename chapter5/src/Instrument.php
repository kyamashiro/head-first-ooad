<?php

namespace Chapter5;

abstract class Instrument
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
     * @var InstrumentSpec
     */
    private $spec;

    /**
     * Instrument constructor.
     * @param string $serialNumber
     * @param float $price
     * @param InstrumentSpec $spec
     */
    public function __construct(string $serialNumber, float $price, InstrumentSpec $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
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
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @return InstrumentSpec
     */
    public function getSpec(): InstrumentSpec
    {
        return $this->spec;
    }
}
