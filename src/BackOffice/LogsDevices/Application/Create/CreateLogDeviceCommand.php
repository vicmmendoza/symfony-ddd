<?php

namespace Vic\BackOffice\LogsDevices\Application\Create;

final class CreateLogDeviceCommand
{

    protected string $uuid_device;
    protected string $description;
    protected string $type;
    protected string $created_at;

    public function __construct(
        string $uuid_device,
        string $description,
        string $type,
        string $created_at
    )
    {

        $this->uuid_device = $uuid_device;
        $this->description = $description;
        $this->type = $type;
        $this->created_at = $created_at;
    }

    public function id() : string
    {
        return $this->id;
    }

    public function uuid_device() : string
    {
        return $this->uuid_device;
    }
 
    public function description() : string
    {
        return $this->description;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function created_at() : string
    {
        return $this->created_at;
    }
}