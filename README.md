## sub domain

1. Clone Repository with "Clone with HTTPS" 
2. cd into the repo directory, and then run "Composer update".
3. Copy .env.example to .env
4. Fill the DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env file with the respective database. DB_PASSWORD with quotes. ie. "password"
5. Generate the APP_KEY using "php artisan key:generate".
6. Run "php artisan migrate:fresh --seed" to migrate dan seeding the table to database.
7. Run the application using "php artisan serve".


##  create new subdomain !! 
1. change config < session -> domain for authentication
2. change env -> APP_URL=http://laravel-sub-domain.com
3. change to 'domain' => env('SESSION_DOMAIN', '.laravel-sub-domain.com'),
4. change app -> providers -> RouteServiceProvider

## optional
- create php artisan session:table
