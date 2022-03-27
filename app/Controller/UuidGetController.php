<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vic\Shared\Application\UuidGenerate;


class UuidGetController
{

    public function __invoke(Request $request): Response
    {
    
        $uuid = UuidGenerate::get();

        return new Response($uuid, Response::HTTP_OK);
        
    }
}