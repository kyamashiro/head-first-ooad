<?php


use Chapter5\Builder;
use Chapter5\Inventory;
use Chapter5\MandolinSpec;
use Chapter5\Style;
use Chapter5\Type;
use Chapter5\Wood;
use PHPUnit\Framework\TestCase;

class FindMandolinTest extends TestCase
{
    public function test_search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);
        $whatErinLikes = new MandolinSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Style::F(), Wood::ALDER(), Wood::ALDER());
        $matchingMandolins = $inventory->mandolinSearch($whatErinLikes);

        $this->assertEquals(1, count($matchingMandolins));
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addInstrument('V95693', 1499.95, new MandolinSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Style::A(), Wood::ALDER(), Wood::ALDER()));
        $inventory->addInstrument('V9512', 1449.95, new MandolinSpec(Builder::FENDER(), 'Stratocaster', Type::ELECTRIC(), Style::F(), Wood::ALDER(), Wood::ALDER()));
    }
}
