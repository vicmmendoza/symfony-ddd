<?php 

namespace Vic\BackOffice\Devices\Domain;

final class Device
{

    private $id;
    private $name;
    private $mac_address;

    public function __construct(DeviceId $id, DeviceName $name, DeviceMacAddress $mac_address)
    {
        
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
