<?php

use Chapter1\Builder;
use Chapter1\Guitar;
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
        $whatErinLikes = new Guitar('', 0, Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
        $matching_guitars = $inventory->search($whatErinLikes);

        if ($matching_guitars) {
            $result = 'Erin, you might like guitars: ';
            foreach ($matching_guitars as $matching_guitar) {
                if ($matching_guitar !== null) {
                    $result .= 'We have a ' . $matching_guitar->getBuilder() . ' ' . $matching_guitar->getModel() . ' '
                        . $matching_guitar->getType() . ' guitar:\n' . $matching_guitar->getBackWood() . ' back and sides, \n'
                        . $matching_guitar->getTopWood() . ' top.\nYou can have it for only $' . $matching_guitar->getPrice() . '!\n ----';
                }
            }
        } else {
            $result = 'Sorry, Erin, we have nothing for you';
        }

        $this->assertEquals(2, count($matching_guitars));
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addGuitar('V95693', 1499.95, Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
        $inventory->addGuitar('V9512', 1449.95, Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
    }
}
