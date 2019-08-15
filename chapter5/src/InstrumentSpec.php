<?php

namespace Chapter5;

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
        foreach ($spec->getProperties() as $property) {
            if ($this->properties[$property] !== $spec->getProperty($property)) {
                return false;
            }
        }
        return true;
    }

}
