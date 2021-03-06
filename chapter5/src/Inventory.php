<?php

namespace Chapter5;

class Inventory
{
    /**
     * @var Instrument[]
     */
    private $inventory;

    /**
     * Inventory constructor.
     */
    public function __construct()
    {
        $this->inventory = [];
    }

    /**
     * @param string $serialNumber
     * @param float $price
     * @param InstrumentSpec $spec
     */
    public function addInstrument(string $serialNumber, float $price, InstrumentSpec $spec): void
    {
        $this->inventory[] = new Instrument($serialNumber, $price, $spec);
    }

    /**
     * @param string $serialNumber
     * @return Instrument|null
     */
    public function get(string $serialNumber): ?Instrument
    {
        foreach ($this->inventory as $instrument) {
            if ($instrument->getSerialNumber() === $serialNumber) {
                return $instrument;
            }
        }
        return null;
    }

    /**
     * @param InstrumentSpec $searchSpec
     * @return Instrument[]
     */
    public function search(InstrumentSpec $searchSpec): array
    {
        $matchingInstruments = [];

        foreach ($this->inventory as $instrument) {
            if ($instrument->getSpec()->matches($searchSpec)) {
                $matchingInstruments[] = $instrument;
            }
        }
        return $matchingInstruments;
    }
}
