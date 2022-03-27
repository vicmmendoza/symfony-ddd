<?php

declare(strict_types=1);

namespace Vic\BackOffice\LogsDevices\Infrastructure\Persistence;

use Vic\BackOffice\LogsDevices\Domain\LogDevice;
use Vic\BackOffice\LogsDevices\Domain\LogDeviceRepository;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class DoctrineLogDeviceRepository extends DoctrineRepository implements LogDeviceRepository
{
    public function save(LogDevice $log_device): void
    {
        $this->persist($log_device);
    }
}
