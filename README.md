# Readme





Tasks:
-change views = false (in fortify.php) after password.reset route has been custom created (as per: https://laravel.com/docs/8.x/fortify#disabling-views-and-password-reset)
-




Commands:

./vendor/bin/sail up -d
docker compose down && docker system prune --all -f && docker volume prune -f

./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan migrate:fresh --seed

./vendor/bin/sail artisan config:cache
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan route:list

