<?php

use Chapter5\Builder;
use Chapter5\GuitarSpec;
use Chapter5\Inventory;
use Chapter5\Type;
use Chapter5\Wood;
use PHPUnit\Framework\TestCase;

class Chapter5FindGuitarTest extends TestCase
{
    public function test_search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);
        $whatErinLikes = new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), 6, Wood::ALDER(), Wood::ALDER());
        $matching_guitars = $inventory->guitarSearch($whatErinLikes);

        $this->assertEquals(2, count($matching_guitars));
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addInstrument('V95693', 1499.95, new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), 6, Wood::ALDER(), Wood::ALDER()));
        $inventory->addInstrument('V9512', 1449.95, new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), 6, Wood::ALDER(), Wood::ALDER()));
    }
}
