<?php 

namespace Vic\BackOffice\Devices\Domain;

use Vic\BackOffice\Devices\Domain\Device;

interface DeviceRepository
{
    public function save(Device $device): void;
}
