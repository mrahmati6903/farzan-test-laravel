## installation
1) clone this repo `https://github.com/mrahmati6903/farzan-test-laravel.git`
2) composer install
3) create .env file
4) php artisan key:generate
5) edit .env file:
    - DB_HOST=`{your_db_host}`
    - DB_PORT=`{your_db_port}`
    - DB_DATABASE=`{your_db_name}`
    - DB_USERNAME=`{your_db_username}`
    - DB_PASSWORD=`{your_db_password}`

6) php artisan migrate
7) php artisan db:seed --class=DefaultAdminSeeder
8) php artisan storage:link
