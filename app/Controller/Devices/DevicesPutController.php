<?php

namespace App\Controller\Devices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DevicesPutController
{

    public function __invoke(string $id, Request $request): Response
    {
        $name = $request->get('name');
        $mac_address = $request->get('mac_address');
        
        return new Response('', Response::HTTP_CREATED);
        
    }
}