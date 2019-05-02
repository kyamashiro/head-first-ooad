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

    public function recognize(Bark $bark): bool
    {
        echo "BarkRecognizer: 検知->{$bark->getSound()}\n";
        /* @var $allowed_barks Bark[] */
        $allowed_barks = $this->door->getAllowedBarks();
        foreach ($allowed_barks as $allowed_bark) {
            if ($allowed_bark->equals($bark)) {
                $this->door->open();
                return true;
            }
        }
        echo 'この犬は許可されていません\n';
        return false;
    }
}
