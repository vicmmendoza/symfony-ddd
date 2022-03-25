
# DDD y Hexagonal Architecture quiero llegar a CQRS(ahora mismo no llega)

He creado una estructura de carpetas aplicando arquitectura hexagonal.
He creado Device con sus Value Object en Domain y en la capa de infraestructura en creado los orm de doctrine y el repository. En Application se encuentran el DeviceCreator que realiza la persistencia de datos y CreateDeviceCommand están los datos de device en primitivos y CreateDeviceCommandHandler se encarga de convertir los primitivos a los value object de Device.

He tenido problemas con los test no me han funcionado ni los unitarios y tampoco behat. 

Hay endpoint(PUT) que recibe un uuid como parametro y el nombre y mac address.
/devices/uuid

He tenido problemas para guardar los datos en la base de datos, ya que al no conocer muy bien symfony no he dado con un error que tengo ahora mismo.