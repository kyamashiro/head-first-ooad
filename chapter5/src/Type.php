<?php


namespace Chapter5;

use MyCLabs\Enum\Enum;

/**
 * @method static Type ACOUSTIC()
 * @method static Type ELECTRIC()
 */
final class Type extends Enum
{
    public const ACOUSTIC = 'Acoustic';
    public const ELECTRIC = 'Electric';
}
