<?php

namespace App\Tests\Features;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;

class DevicesPutControllerTest extends WebTestCase
{

    use ReloadDatabaseTrait;

    public function testSuccess()
    {
        $client = static::createClient();

        $this->sendRequest($client, '90dc55b0-abc0-11ec-b909-0242ac120002', $this->getJson() );

        $this->assertEquals(Response::HTTP_CREATED, $client->getResponse()->getStatusCode());
    }

    public function testDataEmpty()
    {
        $this->executeTestBadRequest([]);
    }

    public function testNameEmpty()
    {

        $this->executeTestBadRequest($this->getJson('', '2B-45-B8-65-0B-7F'));

    }

    public function testMacAddressEmpty()
    {

        $this->executeTestBadRequest($this->getJson('La maquina', ''));

    }

    private function executeTestBadRequest(array $json)
    {
        $client = static::createClient();

        $this->sendRequest($client, '90dc55b0-abc0-11ec-b909-0242ac120002',  $json);

        $this->assertEquals(Response::HTTP_BAD_REQUEST, $client->getResponse()->getStatusCode());
    }

    private function sendRequest(KernelBrowser $client, string $uuid, array $json)
    {
        $client->request(
            'PUT',
            '/api/devices/'.$uuid,
            $json
        );
    }

    private function getJson(string $name = 'La maquina', string $mac_address = '2B-45-B8-65-0B-7F') : array
    {
        return [   "name"          =>  $name,
                    "mac_address"   =>  $mac_address];
    }

}