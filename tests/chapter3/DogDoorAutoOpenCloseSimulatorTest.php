<?php


use Chapter3\BarkRecognizer;
use Chapter3\DogDoor;
use PHPUnit\Framework\TestCase;

class DogDoorAutoOpenCloseSimulatorTest extends TestCase
{
    public function test_RemoteDoor()
    {
        $door = new DogDoor();
        $recognizer = new BarkRecognizer($door);

        echo 'Fidoが吠えだす\n';
        $recognizer->recognizer('ウー');
        echo 'Fidoが外に出る\n';
        echo 'Fidoが用を済ます\n';
        echo '...しかし外に閉め出される\n';
        echo 'Fidoが吠えだす\n';
        $recognizer->recognizer('ウー');
        echo 'Fidoが中に戻る\n';

        $this->assertEquals(false, $door->isOpen());
    }
}
