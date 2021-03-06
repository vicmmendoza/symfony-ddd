<?php 

namespace Vic\BackOffice\Devices\Domain;

use Vic\BackOffice\Devices\Domain\ValueObject\DeviceId;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceName;
use Vic\BackOffice\Devices\Domain\ValueObject\DeviceMacAddress;
use Vic\Shared\Domain\Aggregate\AggregateRoot;

final class Device extends AggregateRoot
{

    private $id;
    private $name;
    private $mac_address;

    public function __construct(DeviceId $id, DeviceName $name, DeviceMacAddress $mac_address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mac_address = $mac_address;
    }

    public static function create(DeviceId $id, DeviceName $name, DeviceMacAddress $mac_address)
    {
        
        $device = new self($id, $name, $mac_address);

        return $device;

    }

    public function id(): DeviceId
    {
        return $this->id;
    }

    public function name(): DeviceName
    {
        return $this->name;
    }

    public function mac_address(): DeviceMacAddress
    {
        return $this->mac_address;
    }
}
