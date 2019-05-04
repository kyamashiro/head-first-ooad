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
        $instrument = null;

        if ($spec instanceof GuitarSpec) {
            $instrument = new Guitar($serialNumber, $price, $spec);
        } else if ($spec instanceof MandolinSpec) {
            $instrument = new Mandolin($serialNumber, $price, $spec);
        }

        $this->inventory[] = $instrument;
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
     * @param GuitarSpec $searchSpec
     * @return Guitar[]
     */
    public function guitarSearch(GuitarSpec $searchSpec): array
    {
        $matchingGuitars = [];

        foreach ($this->inventory as $guitar) {
            if ($guitar->getSpec()->matches($searchSpec)) {
                $matchingGuitars[] = $guitar;
            }
        }

        return $matchingGuitars;
    }

    /**
     * @param MandolinSpec $searchSpec
     * @return Mandolin[]
     */
    public function mandolinSearch(MandolinSpec $searchSpec): array
    {
        $matchingMandolins = [];

        foreach ($this->inventory as $mandolin) {
            if ($mandolin->getSpec()->matches($searchSpec)) {
                $matchingMandolins[] = $mandolin;
            }
        }

        return $matchingMandolins;
    }
}
