<?php

use Chapter1\Guitar;
use Chapter1\Inventory;
use PHPUnit\Framework\TestCase;

class FindGuitarTester extends TestCase
{
    public function test_search()
    {
        $inventory = new  Inventory();
        self::initializeInventory($inventory);
        $whatErinLikes = new Guitar('', 0, 'fender', 'Stratocaster', 'electric', 'Alder', 'Alder');
        $guitar = $inventory->search($whatErinLikes);
        if ($guitar !== null) {
            echo 'Erin, you might like this ' . $guitar->getBuilder() . ' ' . $guitar->getModel() . ' ' .
                $guitar->getType() . ' guitar:\n' . $guitar->getBackWood() . ' back and sides, \n' . $guitar->getTopWood() . ' top.\nYou can have it for only $' . $guitar->getPrice() . '!';
        } else {
            echo 'Sorry, Erin, we have nothing for you';
        }
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addGuitar('V95693', 1499.95, 'Fender', 'Stratocaster', 'electric', 'Alder', 'Alder');
    }
}
