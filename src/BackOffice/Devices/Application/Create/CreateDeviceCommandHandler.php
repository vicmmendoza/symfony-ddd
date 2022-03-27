<?php

namespace Vic\BackOffice\Devices\Application\Create;

use Vic\BackOffice\Devices\Application\Create\DeviceCreator;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceName;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceMacAddress;


final class CreateDeviceCommandHandler
{

    private DeviceCreator $creator;

    public function __construct(DeviceCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(CreateDeviceCommand $command): void
    {
        $id             = new DeviceId($command->id());
        $name           = new DeviceName($command->name());
        $mac_address    = new DeviceMacAddress($command->mac_address());

        $this->creator->__invoke($id, $name, $mac_address);
    }
}