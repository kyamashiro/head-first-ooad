<?php

namespace Chapter4;

class DogDoor
{
    /**
     * @var bool
     */
    private $open;
    /**
     * @var Bark[]
     */
    private $allowed_barks;

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

    /**
     * @return array
     */
    public function getAllowedBarks(): array
    {
        return $this->allowed_barks;
    }

    /**
     * @param Bark $barks
     */
    public function setAllowedBark(Bark $barks): void
    {
        $this->allowed_barks[] = $barks;
    }
}
