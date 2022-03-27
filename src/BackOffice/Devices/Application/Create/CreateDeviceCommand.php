<?php

namespace Vic\BackOffice\Devices\Application\Create;

final class CreateDeviceCommand
{

    private string $id;
    private string $name;
    private string $mac_address;

    public function __construct(string $id, string $name, string $mac_address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mac_address = $mac_address;
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