<?php


namespace Chapter5;

class GuitarSpec extends InstrumentSpec
{
    /**
     * @var int
     */
    private $numStrings;

    /**
     * GuitarSpec constructor.
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param int $numStrings
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function __construct(Builder $builder, string $model, Type $type, int $numStrings, Wood $backWood, Wood $topWood)
    {
        parent::__construct($builder, $model, $type, $backWood, $topWood);
        $this->numStrings = $numStrings;
    }

    /**
     * @return int
     */
    public function getNumStrings(): int
    {
        return $this->numStrings;
    }

    public function matches(InstrumentSpec $otherSpec): bool
    {
        if (!parent::matches($otherSpec)) {
            return false;
        }

        if (!($otherSpec instanceof GuitarSpec)) {
            return false;
        }

        if ($this->numStrings !== $otherSpec->getNumStrings()) {
            return false;
        }

        return true;
    }
}
