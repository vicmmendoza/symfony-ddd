<?php

namespace App\Controller\Devices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vic\BackOffice\Devices\Application\Create\CreateDeviceCommand;
use Vic\BackOffice\Devices\Application\Create\CreateDeviceCommandHandler;
class DevicesPutController
{

    private CreateDeviceCommandHandler $command;

    public function __construct(CreateDeviceCommandHandler $command)
    {
        $this->command = $command;
    }

    public function __invoke(string $id, Request $request): Response
    {

        try {
            $this->command->__invoke(new CreateDeviceCommand(
                $id,
                $request->get('name')??'',
                $request->get('mac_address')??'',
            ));

            return new Response('', Response::HTTP_CREATED);    
        } catch (\Exception $e) {
            return new Response($e, Response::HTTP_BAD_REQUEST);    
        }
    }

}