<?php


namespace Chapter3;


class BarkRecognizer
{
    /**
     * @var DogDoor
     */
    private $door;

    /**
     * BarkRecognizer constructor.
     * @param DogDoor $door
     */
    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function recognizer(string $bark)
    {
        echo "BarkRecognizer: 検知->{$bark}\n";
        $this->door->open();
    }

}
