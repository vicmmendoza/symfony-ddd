
# DDD y Hexagonal Architecture quiero llegar a CQRS

Proyecto de gestión de dispositivos

Con esta aplicación se pueden crear dispositivos y registras sus logs.

- Endpoints Dispositivos
api/devices/{uuid}
PUT
Inputs
    name
    mac_address

api/devices/{uuid}
GET

- Endpoints Logs de Dispositivos
api/logsdevices
POST
Inputs
    uuid_device
    description
    type
    created_at

Para ejecutar los test
    vendor/bin/phpunit