<?php

namespace Chapter5;

use MyCLabs\Enum\Enum;

class InstrumentSpec
{

    /**
     * @var array
     */
    private $properties;

    /**
     * InstrumentSpec constructor.
     * @param $properties
     */
    public function __construct(array $properties)
    {
        $this->properties = $properties;
    }

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function getProperty(string $propertyName)
    {
        return $this->properties[$propertyName];
    }

    /**
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    public function matches(InstrumentSpec $spec): bool
    {
        foreach ($spec->getProperties() as $property => $value) {
            if ($this->properties[$property] !== $spec->getProperty($property)) {
                return false;
            }
        }
        return true;
    }

}
