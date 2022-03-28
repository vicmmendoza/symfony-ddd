<?php

namespace Vic\BackOffice\LogsDevices\Application\Create;

use Vic\Shared\Domain\Utils;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceType;
use Vic\BackOffice\LogsDevices\Application\Create\LogDeviceCreator;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceCreatedAt;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceUuidDevice;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceDescription;
use Vic\BackOffice\LogsDevices\Application\Create\CreateLogDeviceCommand;

final class CreateLogDeviceCommandHandler
{

    private LogDeviceCreator $creator;

    public function __construct(LogDeviceCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(CreateLogDeviceCommand $command): void
    {
        $uuid_device    = new LogDeviceUuidDevice($command->uuid_device());
        $description    = new LogDeviceDescription([$command->description()]);
        $type           = new LogDeviceType($command->type());
        $created_at     = new LogDeviceCreatedAt(Utils::stringToDate($command->created_at()));

        $this->creator->__invoke($uuid_device, $description, $type, $created_at);
    }
}