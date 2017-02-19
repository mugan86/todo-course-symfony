todo
====

A Symfony project created on February 15, 2017, 6:06 pm.

### Interest for me

1.- Start server: php app/console server:run

2.- Download repository and install in other machine

* Clone repository and execute 'sudo composer install' (First asign read/write permissions)

3.- How to view our app all routes:

**php app/console debug:router**

4.- Configure and create database

* https://symfony.com/doc/current/doctrine.html

* 4.1.- First configure our database settings in app/config/parameter.yml file.
* 4.2.- Create database php app/console doctrine:database:create
* 4.3.- Receive message 'Created database `todo` for connection named default'
* 4.4.- Change Collation to UTF8 -> If you using XAMPP (or WAMPP) go to localhost/phpmyadmin --> Databases --> Select create DB --> Operations --> Collation and change to UTF8

5.- Create entity in our Bundle

* php app/console doctrine:generate:entity


6.- Create query in database after create entity
* php app/console doctrine:schema:update --force
* Updating database schema...
* Database schema updated successfully! "1" queries were executed

7.- Urls with parameters in twig template

* http://stackoverflow.com/a/10382504

### Errors and solutions

1.- Warning: date_default_timezone_get() installing Symfony

`[Symfony\Component\Debug\Exception\ContextErrorException]                                     Warning: date_default_timezone_get(): It is not safe to rely on the system's timezone settings.
You are *required* to use the date.timezone setting or the date_default_timezone_set() function.
In case you used any of those methods and you are still getting this warning, you most likely
misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set
date.timezone to select your timezone. in `

http://stackoverflow.com/a/24251897

2.- Connection Refused when I want create database

`[Doctrine\DBAL\Exception\ConnectionException]                              
 An exception occured in driver: SQLSTATE[HY000] [2002] Connection refused  



 [Doctrine\DBAL\Driver\PDOException]        
 SQLSTATE[HY000] [2002] Connection refused  



 [PDOException]                             
 SQLSTATE[HY000] [2002] Connection refused `

 Solution: Check Database START!
