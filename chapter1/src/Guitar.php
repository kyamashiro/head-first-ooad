<?php

namespace Chapter1;

class Guitar
{
    /**
     * @var string
     */
    private $serialNumber;
    /**
     * @var Builder
     */
    private $builder;
    /**
     * @var string
     */
    private $model;
    /**
     * @var Type
     */
    private $type;
    /**
     * @var Wood
     */
    private $backWood;
    /**
     * @var Wood
     */
    private $topWood;
    /**
     * @var float
     */
    private $price;

    /**
     * Guitar constructor.
     * @param string $serialNumber
     * @param float $price
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function __construct(string $serialNumber, float $price, Builder $builder, string $model, Type $type, Wood $backWood, Wood $topWood)
    {
        $this->serialNumber = $serialNumber;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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
     * @return Builder
     */
    public function getBuilder(): Builder
    {
        return $this->builder;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * @return Wood
     */
    public function getBackWood(): Wood
    {
        return $this->backWood;
    }

    /**
     * @return Wood
     */
    public function getTopWood(): Wood
    {
        return $this->topWood;
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
}
