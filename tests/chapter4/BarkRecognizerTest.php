<?php


use Chapter4\Bark;
use Chapter4\BarkRecognizer;
use Chapter4\DogDoor;
use PHPUnit\Framework\TestCase;

class BarkRecognizerTest extends TestCase
{
    public function test_recognize_my_dog()
    {
        $door = new DogDoor();
        $door->setAllowedBark(new Bark('Bow!'));
        $door->setAllowedBark(new Bark('Baw!'));
        $door->setAllowedBark(new Bark('Low!'));
        $recognizer = new BarkRecognizer($door);
        $result = $recognizer->recognize(new Bark('Bow!'));
        $this->assertEquals(true, $result);
    }

    public function test_recognize_other_dog()
    {
        $door = new DogDoor();
        $door->setAllowedBark(new Bark('Bow!'));
        $door->setAllowedBark(new Bark('Baw!'));
        $door->setAllowedBark(new Bark('Low!'));
        $recognizer = new BarkRecognizer($door);
        $result = $recognizer->recognize(new Bark('Can!'));
        $this->assertEquals(false, $result);
    }
}
