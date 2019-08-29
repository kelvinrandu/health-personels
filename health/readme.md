
# HEALTH-PERSONELS
A website that aids in managing health personnel data built using laravel 5.8

## DESCRIPTION
Health personel is a website that enables the user to perform CRUD operations on health personel data.

A user has the priviledge to do the following:
- Create a new professional record
- View all professional records
- Edit professional records
- Delete professional records
- Group professional records
- View professional record status


## LINK TO LIVE SITE
coming soon


## RUNNING THE APPLICATION
- install  [composer](https://getcomposer.org/) 
- clone [this](https://github.com/kelvinrandu/health-personels.git) repository
- navigate to the project directory
- install dependencies needed for the project to run
``` $ composer install```
- set up database by searching  for a .env.example file on project root and rename it to .env then  replace homestead with your database name,username and password.
- run migrations to create tables in your database
```$ php artisan migrate```
- set up application key
```$ php artisan key:generate```
- run the application
``` $ php artisan serve```


