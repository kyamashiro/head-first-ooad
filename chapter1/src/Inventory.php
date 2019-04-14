<?php

namespace Chapter1;

class Inventory
{
    /**
     * @var Guitar[]
     */
    private $guitars;

    /**
     * Inventory constructor.
     */
    public function __construct()
    {
        $this->guitars = [];
    }

    /**
     * @param string $serialNumber
     * @param float $price
     * @param GuitarSpec $guitarSpec
     */
    public function addGuitar(string $serialNumber, float $price, GuitarSpec $guitarSpec): void
    {
        $this->guitars[] = new Guitar($serialNumber, $price, $guitarSpec);
    }

    /**
     * @param string $serialNumber
     * @return Guitar|mixed|null
     */
    public function getGuitar(string $serialNumber): ?Guitar
    {
        foreach ($this->guitars as $guitar) {
            if ($guitar->getSerialNumber() === $serialNumber) {
                return $guitar;
            }
        }
        return null;
    }

    /**
     * @param GuitarSpec $searchSpec
     * @return Guitar[]
     */
    public function search(GuitarSpec $searchSpec): array
    {
        $matching_guitars = [];

        foreach ($this->guitars as $guitar) {
            $guitarSpec = $guitar->getSpec();

            if (!$searchSpec->getBuilder()->equals($guitarSpec->getBuilder())) {
                continue;
            }

            $model = $searchSpec->getModel();
            if (($model !== null) && ($model !== '') && (strtolower($model) !== strtolower($guitarSpec->getModel()))) {
                continue;
            }

            if (!$searchSpec->getType()->equals($guitarSpec->getType())) {
                continue;
            }

            if (!$searchSpec->getBackWood()->equals($guitarSpec->getBackWood())) {
                continue;
            }

            if (!$searchSpec->getTopWood()->equals($guitarSpec->getTopWood())) {
                continue;
            }

            $matching_guitars[] = $guitar;
        }

        return $matching_guitars;
    }
}
