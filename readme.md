Proyecto integrador en el marco de Digital House | Feb. 2019 - Jul. 2019
Desarrollo de una aplicación web E-commerce utilizando HTML para la estructura, CSS para el diseño y Javascript para interacciones y/o validaciones del lado del cliente.
El diseño y desarrollo del FrontEnd toma las buenas prácticas de hacer sitios responsive.
El Backend y la API REST fue desarrollado en PHP, con Laravel como framework de apoyo utilizando buenas prácticas MVC. Diseñamos y utilizamos un UML para el armado y organización de la base de datos relacional con la que luego interactuamos a través de MySQL.
Todo el proyecto se desarrolló siguiendo los lineamientos de Metodologías Ágiles (Scrum), y se gestionó utilizando Git para control de versiones, en un repositorio de trabajo colaborativo y organizado.

LA APP CONSISTE EN LA VENTA DE VOUCHERS O TRAJETAS  QUE PERMITEN ACCEDER A DISTINTAS ACTIVIDADES TURISTICAS CON DESCUENTO O DE MANERA GRATUITA POR UN TIEMPO LIMITADO.


Pasos para instalar el Proyecto
Descargar el repositorio
Por consola ingresar a la carpeta del repositorio.
Ejecutar composer install para que composer descargue todas las carpetas y paquetes necesarios para correr Laravel.
Revisar que exista archivo .env. Si no está copiar el archivo .env-example y eliminar -example
Chequear que tenga valores la posicion APP_KEY. Si no está hay que crearla con el comando php artisan key:generate
Revisar la información de conexión a la db. Son las posicones DB_ .
Ejecutar php artisan serve para iniciar el servidor web.
Elegir desde env según el caso la db
Ejecutar php artisan storage:link para guardar y recuperar datos

