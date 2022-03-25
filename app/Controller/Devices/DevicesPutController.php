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

    public function __invoke(string $id, Request $request): Response
    {

        // TODO Este código no es correcto ya que debería ejecutarse de otra manera
        $device_creator = new DeviceCreator(new DoctrineDeviceRepository);

        $create_device_command_handler = new CreateDeviceCommandHandler($device_creator);

        $create_device_command_handler->__invoke(new CreateDeviceCommand(
                                            $id,
                                            $request->get('name'),
                                            $request->get('mac_address'),
                                        ));
        
        return new Response('', Response::HTTP_CREATED);

    }
}