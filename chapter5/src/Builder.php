<?php


namespace Chapter5;

use MyCLabs\Enum\Enum;

/**
 * @method static Builder FENDER()
 * @method static Builder MARTIN()
 * @method static Builder GIBSON()
 */
class Builder extends Enum
{
    public const FENDER = 'Fender';
    public const MARTIN = 'Martin';
    public const GIBSON = 'Gibson';
}
