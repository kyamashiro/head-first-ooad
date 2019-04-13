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
     * @param string $builder
     * @param string $model
     * @param string $type
     * @param string $backWood
     * @param string $topWood
     * @param float $price
     */
    public function addGuitar(string $serialNumber, float $price, string $builder, string $model, string $type, string $backWood, string $topWood)
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
            $builder = $searchGuitar->getBuilder();
            if (($builder !== null) && ($builder !== '') && ($builder !== $guitar->getBuilder())) {
                continue;
            }

            $model = $searchGuitar->getModel();
            if (($model !== null) && ($model !== '') && ($model !== $guitar->getBuilder())) {
                continue;
            }

            $type = $searchGuitar->getType();
            if (($type !== null) && ($type !== '') && ($type !== $guitar->getBuilder())) {
                continue;
            }

            $backWood = $searchGuitar->getBackWood();
            if (($backWood !== null) && ($backWood !== '') && ($backWood !== $guitar->getBuilder())) {
                continue;
            }

            $topWood = $searchGuitar->getTopWood();
            if (($topWood !== null) && ($topWood !== '') && ($topWood !== $guitar->getBuilder())) {
                continue;
            }

            return $guitar;
        }
        return null;
    }
}
