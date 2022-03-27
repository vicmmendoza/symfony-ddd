<?php

namespace App\Controller\Devices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vic\BackOffice\Devices\Application\Find\DeviceFinder;
use Vic\BackOffice\Devices\Application\Find\FinderDeviceCommand;
use Vic\BackOffice\Devices\Application\Find\FinderDeviceCommandHandler;

class DevicesGetController
{

    private FinderDeviceCommandHandler $command;

    public function __construct(FinderDeviceCommandHandler $command)
    {
        $this->command = $command;
    }

    public function __invoke(string $id, Request $request): Response
    {

        try {

            $device = $this->command->__invoke(new FinderDeviceCommand($id));

            return new Response('', Response::HTTP_OK);    
        } catch (\Exception $e) {
            return new Response($e, Response::HTTP_BAD_REQUEST);    
        }
    }

}