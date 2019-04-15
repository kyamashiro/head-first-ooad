<?php
/**
 * Created by PhpStorm.
 * User: kyamashiro
 * Date: 2019/04/13
 * Time: 23:55
 */

namespace Chapter1;


class GuitarSpec
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
     * @var int
     */
    private $numStrings;

    /**
     * GuitarSpec constructor.
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function __construct(Builder $builder, string $model, Type $type, Wood $backWood, Wood $topWood, int $numStrings)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->numStrings = $numStrings;
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
     * @return int
     */
    public function getNumStrings(): int
    {
        return $this->numStrings;
    }

    public function match(GuitarSpec $guitarSpec): bool
    {
        if (!$this->builder->equals($guitarSpec->builder)) {
            return false;
        }

        if (($this->model !== null) && ($this->model !== '') && (strtolower($this->model) !== strtolower($guitarSpec->model))) {
            return false;
        }

        if ($this->numStrings !== $guitarSpec->numStrings) {
            return false;
        }

        if (!$this->type->equals($guitarSpec->type)) {
            return false;
        }

        if (!$this->backWood->equals($guitarSpec->backWood)) {
            return false;
        }

        if (!$this->topWood->equals($guitarSpec->topWood)) {
            return false;
        }

        return true;
    }
}
