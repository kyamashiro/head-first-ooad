<?php

use Chapter1\Builder;
use Chapter1\Guitar;
use Chapter1\Inventory;
use Chapter1\Type;
use Chapter1\Wood;
use PHPUnit\Framework\TestCase;

class FindGuitarTester extends TestCase
{
    public function test_search()
    {
        $inventory = new  Inventory();
        self::initializeInventory($inventory);
        $whatErinLikes = new Guitar('', 0, Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
        $guitar = $inventory->search($whatErinLikes);
        if ($guitar !== null) {
            $result = 'Erin, you might like this ' . $guitar->getBuilder() . ' ' . $guitar->getModel() . ' ' .
                $guitar->getType() . ' guitar:\n' . $guitar->getBackWood() . ' back and sides, \n' . $guitar->getTopWood() . ' top.\nYou can have it for only $' . $guitar->getPrice() . '!';
        } else {
            $result = 'Sorry, Erin, we have nothing for you';
        }
        print_r($result);
        $this->assertNotEquals('Sorry, Erin, we have nothing for you', $result);
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addGuitar('V95693', 1499.95, Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Wood::ALDER(), Wood::ALDER());
    }
}
