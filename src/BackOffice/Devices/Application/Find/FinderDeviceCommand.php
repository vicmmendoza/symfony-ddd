<?php

namespace Vic\BackOffice\Devices\Application\Find;

final class FinderDeviceCommand
{

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }

}