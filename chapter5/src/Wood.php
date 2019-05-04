<?php


namespace Chapter5;

use MyCLabs\Enum\Enum;

/**
 * @method static Wood INDIAN_ROSEWOOD()
 * @method static Wood BRAZILIAN_ROSEWOOD()
 * @method static Wood ALDER()
 */
class Wood extends Enum
{
    public const INDIAN_ROSEWOOD = 'Indian Rosewood';
    public const BRAZILIAN_ROSEWOOD = 'Brazilian Rosewood';
    public const ALDER = 'Alder';
}
