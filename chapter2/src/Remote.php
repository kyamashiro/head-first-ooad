<?php

namespace Chapter2;

class Remote
{

    /**
     * @var DogDoor
     */
    private $door;

    /**
     * Remote constructor.
     * @param DogDoor $door
     */
    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function pressButton()
    {
        echo 'リモコンのボタンが押された';

        if ($this->door->isOpen()) {
            $this->door->close();
        } else {
            $this->door->open();
            sleep(5);
            $this->door->close();
        }
    }

}
