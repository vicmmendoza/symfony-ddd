<?php

namespace App\Tests\Features;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DevicePutControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        $client->request(   'PUT', 
                            '/devices/90dc55b0-abc0-11ec-b909-0242ac120002', 
                            [   "name"          =>  "Víctor Mendoza",
                                "mac_address"   =>  "2B-45-B8-65-0B-7F"]);

        $this->assertResponseStatusCodeSame(201);
    }
}