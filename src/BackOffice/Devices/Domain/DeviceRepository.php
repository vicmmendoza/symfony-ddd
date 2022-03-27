<?php 

namespace Vic\BackOffice\Devices\Domain;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;

interface DeviceRepository
{
    public function save(Device $device): void;

    public function search(DeviceId $id): ?Device;
}
