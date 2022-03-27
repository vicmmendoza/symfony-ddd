<?php

namespace App\Tests\Features;

use Faker\Factory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;

class DevicesPutControllerTest extends WebTestCase
{

    use ReloadDatabaseTrait;

    public function testSuccess()
    {

        $faker = Factory::create();

        $client = static::createClient();

        $this->sendRequest($client, $faker->uuid, $this->getJson() );

        $this->assertEquals(Response::HTTP_CREATED, $client->getResponse()->getStatusCode());
    }

    public function testDataEmpty()
    {
        $this->executeTestBadRequest([]);
    }

    public function testNameEmpty()
    {

        $faker = Factory::create();

        $this->executeTestBadRequest($this->getJson('', $faker->macAddress));

    }

    public function testMacAddressEmpty()
    {

        $this->executeTestBadRequest($this->getJson('La maquina', ''));

    }

    private function executeTestBadRequest(array $json)
    {
        $faker = Factory::create();

        $client = static::createClient();

        $this->sendRequest($client,  $faker->uuid,  $json);

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