<?php

namespace Vic\Shared\Domain\ValueObject;

abstract class StringValueObject
{
    public function __construct(string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}
