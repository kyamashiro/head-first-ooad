<?php

use Chapter1\Builder;
use Chapter1\Guitar;
use Chapter1\GuitarSpec;
use Chapter1\Inventory;
use Chapter1\Type;
use Chapter1\Wood;
use PHPUnit\Framework\TestCase;

class FindGuitarTest extends TestCase
{
    public function test_search()
    {
        $inventory = new  Inventory();
        self::initializeInventory($inventory);
        $whatErinLikes = new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
        $matching_guitars = $inventory->search($whatErinLikes);

        if ($matching_guitars) {
            $result = 'Erin, you might like guitars: ';
            foreach ($matching_guitars as $matching_guitar) {
                if ($matching_guitar !== null) {
                    $spec = $matching_guitar->getSpec();
                    $result .= 'We have a ' . $spec->getBuilder() . ' ' . $spec->getModel() . ' '
                        . $spec->getType() . ' guitar:\n' . $spec->getBackWood() . ' back and sides, \n'
                        . $spec->getTopWood() . ' top.\nYou can have it for only $' . $matching_guitar->getPrice() . '!\n ----';
                }
            }
        } else {
            $result = 'Sorry, Erin, we have nothing for you';
        }

        $this->assertEquals(2, count($matching_guitars));
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addGuitar('V95693', 1499.95, new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER()));
        $inventory->addGuitar('V9512', 1449.95, new GuitarSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER()));
    }
}
