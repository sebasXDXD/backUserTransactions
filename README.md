# Proyecto de Laravel - Transactions App

Este es un proyecto de Laravel que implementa una aplicación llamada Transactions App. Sigue los pasos a continuación para configurar y ejecutar el proyecto en tu entorno local.

## Pasos de configuración

1. Descarga el proyecto desde GitHub.

2. Abre una terminal en el directorio raíz del proyecto.

3. Ejecuta el siguiente comando para instalar las dependencias de Laravel:

   ```bash
   composer install

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=transactions_db
DB_USERNAME=nombre_usuario
DB_PASSWORD=contraseña_usuario

Asegúrate de reemplazar nombre_usuario y contraseña_usuario con tus credenciales de MySQL.

Ejecuta las migraciones para crear las tablas en la base de datos:
php artisan migrate
Ejecuta el siguiente comando para poblar la base de datos con datos de prueba:
php artisan db:seed
Una vez que hayas completado los pasos anteriores, puedes iniciar el servidor de desarrollo de Laravel:
php artisan serve
Abre tu navegador y ve a http://localhost:8000 para ver la aplicación en funcionamiento.

Estructura del proyecto
La mayoría del código de la aplicación se encuentra en la carpeta app/. Aquí encontrarás los controladores, modelos, vistas y demás archivos necesarios para el funcionamiento de la aplicación.

¡Listo! Ahora deberías tener el proyecto de Transactions App en funcionamiento en tu entorno local. Si tienes alguna pregunta o problema, no dudes en contactarnos.

¡Gracias y disfruta del proyecto! 🚀
