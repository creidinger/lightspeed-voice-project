# Lightspeed Voice Sample Project

This is not a fully functioning CRUD app. I can however make it one, if you would like.


## Techstack Reqs

1. Laravel 8.x
1. MySQL 5 or MySQL 8

## setup

1. Create a ```laravel``` database.
1. Edit your ```.env``` file with your DB login.
    > I used the root user with a password of password.

1. run the ```php artisan migrate``` and ```php artisan db:seed``` artisan commands.
1. serve the app with ```php artisan serve```.
    > if the setup fails, its most likely because the project lost its point of reference.
    you'll need to  run the additional commands below.

1. ```php artisan optimize``` and ```php artisan key:generate```
