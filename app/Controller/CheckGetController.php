<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckGetController
{

    public function __invoke(Request $request): Response
    {
    
        return new Response('Check', Response::HTTP_OK);
        
    }
}