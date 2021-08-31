# Readme






Commands:

./vendor/bin/sail up -d
docker compose down && docker system prune --all -f && docker volume prune -f

./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan migrate:fresh --seed

./vendor/bin/sail artisan config:cache
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan route:list





Postman: 

pm.sendRequest({
    url: 'http://localhost:7999/sanctum/csrf-cookie',
    method: 'GET'
}, function (error, response, { cookies }) {
    if (!error) {
        pm.environment.set('xsrf-token', cookies.get('XSRF-TOKEN'))
    }
})





Fresh install:

composer create-project laravel/laravel php-application
(run migrations)
composer require laravel/sail --dev
(run migrations)
composer require laravel/sanctum
(run migrations)
composer require laravel/fortify
(run migrations)



Test email:

Mail::raw('Hello World!', function($msg) {$msg->to('badsprad@hotmail.com')->from('mysender@app.com')->subject('Test Laravel Email'); });





Clear cache:

php artisan cache:clear && php artisan config:cache