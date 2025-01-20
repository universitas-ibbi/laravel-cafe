composer install
cp .env.example .env
touch database/database.sqlite
php artisan migrate:fresh --seed
php artisan key:generate
npm install && npm run build
