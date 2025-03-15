<?php

namespace panlatent\craft\attribute\reflector;

class Reflector
{
    private \ReflectionClass $object;

    public function __construct(object|string $class)
    {
        $this->object = new \ReflectionClass($class);
    }

    /**
     * @template T
     * @param class-string<T> $class
     * @return T|null
     */
    public function getAttribute(string $class): ?object
    {
        $attributes = $this->object->getAttributes($class);
        if (empty($attributes)) {
            return null;
        }
        return $attributes[0]->newInstance();
    }
}