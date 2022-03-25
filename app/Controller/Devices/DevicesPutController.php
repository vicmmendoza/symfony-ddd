<?php

namespace App\Controller\Devices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vic\BackOffice\Devices\Application\DeviceCreator;
use Vic\BackOffice\Devices\Application\CreateDeviceCommand;
use Vic\BackOffice\Devices\Application\CreateDeviceCommandHandler;
use Vic\BackOffice\Devices\Infrastructure\Persistence\DoctrineDeviceRepository;
class DevicesPutController
{

    private CreateDeviceCommandHandler $command;

    public function __construct(CreateDeviceCommandHandler $command)
    {
        $this->command = $command;
    }

    public function __invoke(string $id, Request $request): Response
    {

        $this->command->__invoke(new CreateDeviceCommand(
                                            $id,
                                            $request->get('name'),
                                            $request->get('mac_address'),
                                        ));
        
        return new Response('', Response::HTTP_CREATED);

    }
}