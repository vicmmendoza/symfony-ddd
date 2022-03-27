<?php

namespace App\Tests\Features;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;

class DeviceGetControllerTest extends WebTestCase
{

    use ReloadDatabaseTrait;

    public function testSuccess()
    {
        $client = static::createClient();

        $this->sendRequest($client, '90dc55b0-abc0-11ec-b909-0242ac120002');

        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    private function sendRequest(KernelBrowser $client, string $uuid)
    {
        $client->request(
            'GET',
            '/api/devices/'.$uuid,
            []
        );
    }

}