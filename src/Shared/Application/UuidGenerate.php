<?php

declare(strict_types=1);

namespace Vic\Shared\Application;

use Vic\Shared\Domain\ValueObject\Uuid;
use Ramsey\Uuid\Uuid as RamseyUuid;

final class UuidGenerate
{

    public static function get(): string
    {
        
        return RamseyUuid::uuid4()->toString();

    }
}