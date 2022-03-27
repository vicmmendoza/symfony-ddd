<?php

namespace Vic\Shared\Domain\ValueObject;

use Vic\Shared\Domain\Utils;

class JsonValue
{
    protected string $value;

    public function __construct(array $value)
    {
        $this->value = Utils::jsonEncode($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function asArray(): array
    {
        return Utils::jsonDecode($this->value);
    }

    private function throwIsInvalid(string $value)
    {
        $valid = (Utils::jsonDecode($value) == null) ? false : true;

        if (false === $valid) {
            throw new \Exception("Json is incorrect", 1);
        }
    }
    
}
