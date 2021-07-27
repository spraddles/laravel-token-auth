# Readme

./vendor/bin/sail up -d
docker compose down && docker system prune --all -f && docker volume prune -f

./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
./vendor/bin/sail artisan migrate:fresh --seed