# APIS-WEB
APIS/WEB TEST

**CREAMOS REPOSITORIO EN GITHUB
	echo "# TEST-PHP-NEXURA" >> README.md
	git init
	
	git remote add origin  https://github.com/joelAdmin/API.git
	got add .
	git commit -m "first commit"
	git push origin master


***CREAR MIGRACIONES
php artisan make:migration create_clientes_table
php artisan make:migration create_clientes_table

***CREAR MODELOS
php artisan make:model Cliente
php artisan make:model Viaje

***CREAR CONTROLADORES
php artisan make:controller ClienteController
php artisan make:controller ViajeController


***Endpoint
https://web-api.jlssystem.com/api/cliente/all

*** COMANDOS LARAVEL INSTALACION
php artisan migrate

config .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api-web
DB_USERNAME=root
DB_PASSWORD=
