<?php

declare(strict_types=1);

namespace Vic\BackOffice\LogsDevices\Application\Create;

use Vic\BackOffice\LogsDevices\Domain\LogDevice;
use Vic\BackOffice\LogsDevices\Domain\LogDeviceRepository;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceCreatedAt;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceId;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceType;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceUuidDevice;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceDescription;

final class LogDeviceCreator
{

    private $repository;

    public function __construct(LogDeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
                LogDeviceUuidDevice $uuid_device,
                LogDeviceDescription $description,
                LogDeviceType $type,
                LogDeviceCreatedAt $created_at
    ): void
    {
        $log_Device = LogDevice::create($uuid_device, $description, $type, $created_at);
        
        $this->repository->save($log_Device);
    }
}