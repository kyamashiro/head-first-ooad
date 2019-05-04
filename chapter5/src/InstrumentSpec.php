<?php

namespace Chapter5;

abstract class InstrumentSpec
{
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
     * InstrumentSpec constructor.
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function __construct(Builder $builder, string $model, Type $type, Wood $backWood, Wood $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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

    public function matches(InstrumentSpec $otherSpec): bool
    {
        if (!$this->builder->equals($otherSpec->getBuilder())) {
            return false;
        }
        if (!isset($this->model) || $this->model !== $otherSpec->getModel()) {
            return false;
        }
        if (!$this->type->equals($otherSpec->getType())) {
            return false;
        }
        if (!$this->backWood->equals($otherSpec->getBackWood())) {
            return false;
        }
        if (!$this->topWood->equals($otherSpec->getTopWood())) {
            return false;
        }

        return true;
    }
}
