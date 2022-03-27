<?php 

namespace Vic\BackOffice\LogsDevices\Domain;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;

interface LogDeviceRepository
{
    public function save(LogDevice $device): void;
}
