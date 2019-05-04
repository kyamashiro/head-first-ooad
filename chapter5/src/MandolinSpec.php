<?php


namespace Chapter5;

class MandolinSpec extends InstrumentSpec
{
    /**
     * @var Style
     */
    private $style;

    /**
     * GuitarSpec constructor.
     * @param Builder $builder
     * @param string $model
     * @param Type $type
     * @param Style $style
     * @param Wood $backWood
     * @param Wood $topWood
     */
    public function __construct(Builder $builder, string $model, Type $type, Style $style, Wood $backWood, Wood $topWood)
    {
        parent::__construct($builder, $model, $type, $backWood, $topWood);
        $this->style = $style;
    }

    /**
     * @return Style
     */
    public function getStyle(): Style
    {
        return $this->style;
    }

    public function matches(InstrumentSpec $otherSpec): bool
    {
        if (!parent::matches($otherSpec)) {
            return false;
        }

        if (!($otherSpec instanceof MandolinSpec)) {
            return false;
        }


        if ($this->style->equals($otherSpec->getStyle())) {
            return false;
        }

        return true;
    }
}
