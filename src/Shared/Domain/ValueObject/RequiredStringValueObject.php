<?php

namespace Vic\Shared\Domain\ValueObject;

abstract class RequiredStringValueObject
{

    protected $value;

    public function __construct(string $value)
    {

        if ($value === '' || is_null($value)) {
            throw new \Exception("Required Value", 1);
            
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
