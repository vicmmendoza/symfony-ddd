<?php

namespace Vic\BackOffice\Devices\Application\Find;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\BackOffice\Devices\Application\Find\DeviceFinder;


final class FinderDeviceCommandHandler
{

    private DeviceFinder $finder;

    public function __construct(DeviceFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(FinderDeviceCommand $command): ?Device
    {
        $id             = new DeviceId($command->id());

        return $this->finder->__invoke($id);

    }
}