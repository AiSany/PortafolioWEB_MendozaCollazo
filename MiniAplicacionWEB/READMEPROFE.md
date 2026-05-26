#Proyecto Web
Materia: Desarrollo de Aplicaciones Web  
**Alumno: Angel Daniel Mendoza Collazo


El proyecto utiliza una aquitectura cliente servidor.  
Cliente: Interfaz desarrollada con HTML y validaciones en JavaScript (`/views`).  
Servidor: Lógica de negocio procesada en PHP (`/php`) y persistencia en MySQL (`/config`).


La comunicación entre el cliente y el servidor se realiza mediante el método *POST*, garantizando que la información viaje de forma íntegra hacia los scripts de procesamiento.


Front-end: Validación de campos obligatorios mediante JavaScript para evitar registros vacíos.
Back-end: Las contraseñas se almacenan utilizando el algoritmo de cifrado *SHA1*, asegurando que los datos sensibles no sean legibles en la base de datos.