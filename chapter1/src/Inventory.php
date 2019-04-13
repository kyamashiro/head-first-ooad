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
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function addGuitar(string $serialNumber, float $price, Builder $builder, string $model, Type $type, Wood $backWood, Wood $topWood): void
    {
        $this->guitars[] = new Guitar($serialNumber, $price, $builder, $model, $type, $backWood, $topWood);
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
     * @param Guitar $searchGuitar
     * @return Guitar|mixed
     */
    public function search(Guitar $searchGuitar): ?Guitar
    {
        foreach ($this->guitars as $guitar) {
            if (!$searchGuitar->getBuilder()->equals($guitar->getBuilder())) {
                continue;
            }

            $model = $searchGuitar->getModel();
            if (($model !== null) && ($model !== '') && (strtolower($model) !== strtolower($guitar->getModel()))) {
                continue;
            }

            if (!$searchGuitar->getType()->equals($guitar->getType())) {
                continue;
            }

            if (!$searchGuitar->getBackWood()->equals($guitar->getBackWood())) {
                continue;
            }

            if (!$searchGuitar->getTopWood()->equals($guitar->getTopWood())) {
                continue;
            }

            return $guitar;
        }
        return null;
    }
}
