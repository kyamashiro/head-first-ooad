<?php

namespace Chapter3;

class DogDoor
{
    /**
     * @var bool
     */
    private $open;

    /**
     * DogDoor constructor.
     */
    public function __construct()
    {
        $this->open = false;
    }

    /**
     * @return void
     */
    public function open(): void
    {
        echo '犬用ドアが開く';
        $this->open = true;
        sleep(5);
        $this->close();
    }

    /**
     * @return void
     */
    public function close(): void
    {
        echo '犬用ドアが閉まる';
        $this->open = false;
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->open;
    }
}
