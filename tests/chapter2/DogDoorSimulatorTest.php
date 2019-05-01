<?php


use Chapter2\DogDoor;
use Chapter2\Remote;
use PHPUnit\Framework\TestCase;

class DogDoorSimulatorTest extends TestCase
{
    public function test_RemoteDoor()
    {
        $door = new DogDoor();
        $remote = new Remote($door);
        echo 'Fidoが外に出たいと吠える...\n';
        $remote->pressButton();
        echo 'Fidoが外に出る\n';
        echo 'Fidoが用を済ます\n';
        echo 'Fidoが家の中に戻る...\n';
        $this->assertEquals(false, $door->isOpen());
    }
}
