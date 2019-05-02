<?php


namespace Chapter4;


class Bark
{
    /**
     * @var string
     */
    private $sound;

    /**
     * Bark constructor.
     * @param string $sound
     */
    public function __construct(string $sound)
    {
        $this->sound = $sound;
    }

    /**
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * @param Bark $other_bark
     * @return bool
     */
    public function equals(Bark $other_bark): bool
    {
        if ($other_bark instanceof $this) {
            if ($other_bark->getSound() === $this->getSound()) {
                return true;
            }
        }
        return false;
    }
}
