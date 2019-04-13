<?php

namespace Chapter1;

class Guitar
{
    /**
     * @var string
     */
    private $serialNumber;
    /**
     * @var string
     */
    private $builder;
    /**
     * @var string
     */
    private $model;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $backWood;
    /**
     * @var string
     */
    private $topWood;
    /**
     * @var float
     */
    private $price;

    /**
     * Guitar constructor.
     * @param string $serialNumber
     * @param string $builder
     * @param string $model
     * @param string $type
     * @param string $backWood
     * @param string $topWood
     * @param float $price
     */
    public function __construct(string $serialNumber, float $price, string $builder, string $model, string $type, string $backWood, string $topWood)
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
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return string
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getBackWood()
    {
        return $this->backWood;
    }

    /**
     * @return string
     */
    public function getTopWood()
    {
        return $this->topWood;
    }

    /**
     * @return float
     */
    public function getPrice()
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
