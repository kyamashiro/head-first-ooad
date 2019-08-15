<?php


use Chapter5\Builder;
use Chapter5\InstrumentSpec;
use Chapter5\InstrumentType;
use Chapter5\Inventory;
use Chapter5\Model;
use Chapter5\Style;
use Chapter5\Type;
use Chapter5\Wood;
use PHPUnit\Framework\TestCase;

/**
 * @group chapter5
 */
class FindInstrumentTest extends TestCase
{
    public function test_GuitarSearch()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);
        $property = ['instrumentType' => InstrumentType::GUITAR, 'builder' => Builder::GIBSON];
        $clientSpec = new InstrumentSpec($property);
        $matchingInstrument = $inventory->search($clientSpec);

        $this->assertEquals(2, count($matchingInstrument));
    }

    public function test_MandolinSearch()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);
        $property = ['instrumentType' => InstrumentType::MANDOLIN, 'numStrings' => 5];
        $clientSpec = new InstrumentSpec($property);
        $matchingInstrument = $inventory->search($clientSpec);

        $this->assertEquals(1, count($matchingInstrument));
    }

    private static function initializeInventory(Inventory $inventory): void
    {
        $inventory->addInstrument('V95693', 1499.95, new InstrumentSpec(['instrumentType' => InstrumentType::GUITAR, 'builder' => Builder::FENDER, 'model' => Model::STRATCASTER, 'type' => Type::ELECTRIC, 'style' => Style::F, 'backwood' => Wood::ALDER, 'topwood' => Wood::ALDER, 'numStrings' => 6]));
        $inventory->addInstrument('V1', 1890, new InstrumentSpec(['instrumentType' => InstrumentType::GUITAR, 'builder' => Builder::GIBSON, 'model' => Model::LESPAUL, 'type' => Type::ELECTRIC, 'style' => Style::F, 'backwood' => Wood::ALDER, 'topwood' => Wood::ALDER, 'numStrings' => 6]));
        $inventory->addInstrument('V2', 1499.71, new InstrumentSpec(['instrumentType' => InstrumentType::GUITAR, 'builder' => Builder::GIBSON, 'model' => Model::ES335, 'type' => Type::ELECTRIC, 'style' => Style::F, 'backwood' => Wood::MAPLE, 'topwood' => Wood::MAPLE, 'numStrings' => 6]));
        $inventory->addInstrument('V9569', 5000.12, new InstrumentSpec(['instrumentType' => InstrumentType::MANDOLIN, 'builder' => Builder::MARTIN, 'model' => Model::D18, 'type' => Type::ACOUSTIC, 'style' => Style::F, 'backwood' => Wood::ALDER, 'topwood' => Wood::ALDER, 'numStrings' => 5]));
        $inventory->addInstrument('1365127', 650.10, new InstrumentSpec(['instrumentType' => InstrumentType::BANJO, 'builder' => Builder::MARTIN, 'model' => Model::RB3WREATH, 'type' => Type::ACOUSTIC, 'style' => Style::F, 'backwood' => Wood::MAPLE, 'topwood' => Wood::MAPLE, 'numStrings' => 5]));
    }
}
