# How this works
* install project & dependencies
* use Postman to test routes:  
  * POST: http://localhost:7999/login (with username & password)  
  * POST: http://localhost:7999/logout (with username)  
  * POST: http://localhost:7999/password-reset (with username) 

### Dependencies
- composer install
- npm install

### Laravel Sail
- ./vendor/bin/sail up -d  
- ./vendor/bin/sail artisan migrate  
- ./vendor/bin/sail artisan migrate:fresh --seed  
- ./vendor/bin/sail artisan config:cache && ./vendor/bin/sail artisan cache:clear 
- ./vendor/bin/sail artisan route:list  
- docker compose down && docker system prune --all -f && docker volume prune -f  

### Test email
1. php artisan tinker  
2. Mail::raw('Hello World!', function($msg) {$msg->to('recipient@app.com')->from('sender@app.com')->subject('Test Laravel Email'); });  
