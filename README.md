Primero que todo debe crear la DB que se llama transactions_db
Abre el archivo .env en la raíz del proyecto y configura las credenciales de la base de datos con los datos de tu servidor MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=transactions_db
DB_USERNAME=root
DB_PASSWORD=
Asegúrate de reemplazar nombre_usuario y contraseña_usuario con tus credenciales de MySQL.

php artisan migrate
para crear la migracion
php artisan db:seed
para poblarla

php artisan serve

Por ultimo la mayoria del codigo se encuentra escrito dentro de la carpeta ./app/
