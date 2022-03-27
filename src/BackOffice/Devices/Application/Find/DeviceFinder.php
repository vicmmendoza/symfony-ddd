<?php

namespace Vic\BackOffice\Devices\Application\Find;

use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\DeviceRepository;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;

final class DeviceFinder
{

    private $repository;

    public function __construct(DeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(DeviceId $id): Device
    {
        $device = $this->repository->search($id);

        if (null === $device)
        {
            throw new \Exception("Device does not exist.");
        }

        return $device;
    }
}