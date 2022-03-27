<?php

namespace App\Tests\Features\Devices;

use Vic\BackOffice\Devices\Domain\Device;
use Symfony\Component\HttpFoundation\Response;
use App\Tests\Shared\Domain\Mother\DeviceMother;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;
use App\Tests\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepositoryMother;


class DeviceGetControllerTest extends WebTestCase
{

    use ReloadDatabaseTrait;

    public function testDeviceNotExist()
    {
        $client = static::createClient();

        $this->sendRequest($client, '90dc55b0-abc0-11ec-b909-0242ac120002');

        $this->assertEquals(Response::HTTP_BAD_REQUEST, $client->getResponse()->getStatusCode());
    }

    public function testSuccess()
    {

        $client = static::createClient();

        $entityManager = $this->getContainer()
            ->get('doctrine')
            ->getManager();

        $device = $this->persistenceDevice($entityManager);

        $this->sendRequest($client, $device->id());

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

    private function persistenceDevice($entityManager) :Device
    {

        $device = DeviceMother::random();

        $doctrine_repository = new DoctrineRepositoryMother($entityManager);

        $doctrine_repository->save($device);


        return $device;

    }

}