<?php

namespace App\Controller\LogsDevices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vic\BackOffice\LogsDevices\Application\Create\CreateLogDeviceCommand;
use Vic\BackOffice\LogsDevices\Application\Create\CreateLogDeviceCommandHandler;

class LogsDevicesPostController
{

    private CreateLogDeviceCommandHandler $command;

    public function __construct(CreateLogDeviceCommandHandler $command)
    {
        $this->command = $command;
    }

    public function __invoke(Request $request): Response
    {

        try {
            $this->command->__invoke(new CreateLogDeviceCommand(
                $request->get('uuid_device')??'',
                $request->get('description')??'',
                $request->get('type')??'',
                $request->get('created_at')??'',
            ));

            return new Response('', Response::HTTP_CREATED);    
        } catch (\Exception $e) {
            return new Response($e, Response::HTTP_BAD_REQUEST);    
        }
    }

}