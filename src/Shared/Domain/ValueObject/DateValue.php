<?php

declare(strict_types=1);

namespace Vic\Shared\Domain\ValueObject;

use Carbon\Carbon;
use Vic\Shared\Domain\Utils;

class DateValue
{
    protected \DateTime $date;

    public function __construct(\DateTime $date = null)
    {
        if (! $date instanceof Carbon && null !== $date) {
            $date = Carbon::instance($date);
        }

        $this->date = $date ?? Carbon::now();
    }

    public function date(): Carbon
    {
        return $this->date;
    }

    public function value(): string
    {
        return Utils::dateToString($this->date());
    }
}