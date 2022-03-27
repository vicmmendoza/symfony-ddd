<?php

declare(strict_types=1);

namespace Vic\BackOffice\Devices\Infrastructure\Persistence;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\DeviceRepository;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class DoctrineDeviceRepository extends DoctrineRepository implements DeviceRepository
{
    public function save(Device $device): void
    {
        $this->persist($device);
    }

    public function search(DeviceId $id): ?Device
    {
       return $this->repository(Device::class)->find($id);
    }
}
