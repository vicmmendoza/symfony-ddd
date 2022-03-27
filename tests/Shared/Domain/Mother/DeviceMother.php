<?php

namespace App\Tests\Shared\Domain\Mother;

use Faker\Factory;
use Vic\BackOffice\Devices\Domain\Device;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceName;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceMacAddress;

final class DeviceMother
{

    public static function with(array $params): Device   
    {
        $faker = Factory::create();
        
        return new Device(
            isset($params['id']) ? new DeviceId($params['uuid']) : new DeviceId($faker->uuid),
            new DeviceName($params['name'] ?? null),
            new DeviceMacAddress($params['mac_address'])
        );
    }

    public static function random(): Device
    {
        $faker = Factory::create();

        return new Device(
            new Deviceid($faker->uuid),
            new DeviceName($faker->name),
            new DeviceMacAddress($faker->macAddress)
        );
    }

}
