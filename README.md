## Installation

```bash
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS BOOKit;"
composer install
cp .env.example .env
php artisan key:generate
php artisan db:seed
npm install
npm run build
```

## Running app
```bash
make run
```
