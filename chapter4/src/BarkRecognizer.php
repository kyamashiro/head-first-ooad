<?php


namespace Chapter4;


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

    public function recognize(Bark $bark)
    {
        echo "BarkRecognizer: 検知->{$bark->getSound()}\n";
        //鳴き声の比較
        if ($this->door->getAllowedBark()->equals($bark)) {
            $this->door->open();
        } else {
            echo 'この犬は許可されていません\n';
        }
    }
}
