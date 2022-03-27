<?php 

namespace Vic\BackOffice\LogsDevices\Domain;

use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceCreatedAt;
use Vic\Shared\Domain\Aggregate\AggregateRoot;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceId;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceType;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceUuidDevice;
use Vic\BackOffice\LogsDevices\Domain\ValueObject\LogDeviceDescription;

final class LogDevice extends AggregateRoot
{

    protected $id;
    protected $uuid_device;
    protected $description;
    protected $type;
    protected $created_at;

    public function __construct(
                LogDeviceId $id,
                LogDeviceUuidDevice $uuid_device,
                LogDeviceDescription $description,
                LogDeviceType $type,
                LogDeviceCreatedAt $created_at
    )
    {
        $this->id = $id;
        $this->uuid_device = $uuid_device;
        $this->description = $description;
        $this->type = $type;
        $this->created_at = $created_at;
    }

    public static function create(
                LogDeviceId $id,
                LogDeviceUuidDevice $uuid_device,
                LogDeviceDescription $description,
                LogDeviceType $type,
                LogDeviceCreatedAt $created_at
    )
    {
        
        $log_device = new self($id, $uuid_device, $description, $type, $created_at);

        return $log_device;

    }

    public function id() : LogDeviceId
    {
        return $this->id;
    }

    public function uuid_device() : LogDeviceUuidDevice
    {
        return $this->uuid_device;
    }
 
    public function description() : LogDeviceDescription
    {
        return $this->description;
    }

    public function type() : LogDeviceType
    {
        return $this->type;
    }

    public function created_at() : LogDeviceCreatedAt
    {
        return $this->created_at;
    }
}
