<?php

namespace App\Controller\Devices;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DevicesPutController
{

    

    public function __construct()
    {
        
    }

    public function __invoke(string $id, Request $request): Response
    {

        try {
            

            return new Response('', Response::HTTP_OK);    
        } catch (\Exception $e) {
            return new Response($e, Response::HTTP_BAD_REQUEST);    
        }
    }

}