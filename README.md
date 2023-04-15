# How to build this Laravel project ?
You can build this project base on Docker.

## Prerequisites
1. Firstly, you need to install Docker
2. You should config Docker File Sharing, to include the path of project folder

## Build
2. Copy content of `.env.example` to `.env` file
3. Run command: `docker-compose up -d --build`
4. Run command: `docker-compose run --rm app composer install`, to install the dependencies ...
  Note: If any errors appear, consider to run: `docker-compose run --rm app composer update`

5. Create the database and migrate: `docker-compose run --rm app php artisan migrate`
6. Make sample data to test: `docker-compose run --rm app php artisan db:seed --class=DatabaseSeeder`



## Result
You can see the result in `screenshots` folder.

