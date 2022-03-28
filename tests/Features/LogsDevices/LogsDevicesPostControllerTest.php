<?php

namespace App\Tests\Features\Devices;

use Faker\Factory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;

class LogsDevicesPostControllerTest extends WebTestCase
{

    use ReloadDatabaseTrait;

    public function testSuccess()
    {

        $faker = Factory::create();

        $client = static::createClient();

        $this->sendRequest($client, $faker->uuid, $this->getJson() );

        $this->assertEquals(Response::HTTP_CREATED, $client->getResponse()->getStatusCode());
    }

    private function sendRequest(KernelBrowser $client, string $uuid, array $json)
    {
        $client->request(
            'POST',
            '/api/logsdevices',
            $json
        );
    }

    private function getJson() : array
    {
        return [    "uuid_device"   =>  'd45ddd77-15ac-46e2-b12e-f2c2727bb770',
                    "description"   =>  'Devices not found',
                    "type"          =>  'errors',
                    "created_at"     =>  '2022-03-26 10:10:10',
                
                
                ];
    }

}