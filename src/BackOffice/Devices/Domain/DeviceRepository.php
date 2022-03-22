<?php 

namespace Vic\BackOffice\Devices\Domain;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\DeviceId;

interface CourseRepository
{
    public function save(Device $device): void;

    public function search(DeviceId $id): ?Device;
}
