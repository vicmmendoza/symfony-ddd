
# DDD y Hexagonal Architecture quiero llegar a CQRS(ahora mismo no llega)

He creado una estructura de carpetas aplicando arquitectura hexagonal.
He creado Device con sus Value Object en Domain y en la capa de infraestructura en creado los orm de doctrine y el repository. En Application se encuentran el DeviceCreator la llamada a guardar los datos y CreateDeviceCommand están los datos de Device en primitivos y CreateDeviceCommandHandler se encarga de convertir los primitivos a los value object de Device.

Hay endpoint(PUT) que recibe un uuid como parametro
/devices/{uuid}
Inputs
    name
    mac_address

Falta realizar test.