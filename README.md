Subir o docker 
docker compose up -d --build

Acessar o container que esta o php
docker exec -it laravel_app bash

Rodar o migrate
php artisan migrate
