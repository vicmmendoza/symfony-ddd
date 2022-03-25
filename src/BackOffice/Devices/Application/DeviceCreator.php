<?php

declare(strict_types=1);

namespace Vic\BackOffice\Devices\Application;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\DeviceRepository;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceName;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceMacAddress;


final class DeviceCreator
{

    private $repository;

    public function __construct(DeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(DeviceId $id, DeviceName $name, DeviceMacAddress $mac_address): void
    {
        $Device = Device::create($id, $name, $mac_address);
        
        $this->repository->save($Device);

        // TODO codear eventos
    }
}