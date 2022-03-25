<?php

namespace Vic\BackOffice\Devices\Application;

final class CreateDeviceCommand
{

    private string $id;
    private string $name;
    private string $mac_address;

    public function __construct(string $id, string $name, string $duration)
    {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function mac_address(): string
    {
        return $this->mac_address;
    }
}