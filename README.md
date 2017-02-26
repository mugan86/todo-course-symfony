todo
====

A Symfony project created on February 15, 2017, 6:06 pm.

### Interest for me

1.- Start server: php app/console server:run

2.- Download repository and install in other machine

* Clone repository and execute 'sudo composer install' (First asign read/write permissions)

3.- Create new bundle (with namespace):

* 3.1.- php app/console generate:bundle --namespace=AML/ServiraceBundle
* 3.2.- INTRO [NO]
* 3.3.- Bundle Name.
* 3.4.- Create src directory?
* 3.5.- INTRO[EMPTY]
* 3.6.- Format: yml

4.- How to view our app all routes:

**php app/console debug:router**

5.- Configure and create database

* https://symfony.com/doc/current/doctrine.html

* 5.1.- First configure our database settings in app/config/parameter.yml file.
* 5.2.- Create database php app/console doctrine:database:create
* 5.3.- Receive message 'Created database `todo` for connection named default'
* 5.4.- Change Collation to UTF8 -> If you using XAMPP (or WAMPP) go to localhost/phpmyadmin --> Databases --> Select create DB --> Operations --> Collation and change to UTF8

6.- Create entity in our Bundle

* php app/console doctrine:generate:entity
* Add new entity inside bundle---> Bundle:Entity (For example: AMLServiraceBundle:Race)
* Configuration format (yml, xml, php, or annotation) [annotation]: annotation


7.- Create query in database after create entity
* php app/console doctrine:schema:update --force
* Updating database schema...
* Database schema updated successfully! "1" queries were executed

8.- Urls with parameters in twig template

* http://stackoverflow.com/a/10382504

9.- Steps to create form

* http://symfony.com/doc/2.8/forms.html
* Create new url in src/AML/UserBundle/Resources/config/routing.yml---> 'aml_user_add' (Define path and select controller)
* Add url in 'menu.html.twig' to use and redirect add form (aml_user_add)
* Add in AML/UserBundle/Controller/UserController.php User entity object file---> use AML\UserBundle\Entity\User;
* Define Add Action with start User() object and return add.html.twig template--> addAction (UserController.php / Line 40)
* Create form with php app/console doctrine:generate:form AMLUserBundle:User (object to create UserType.php)
* Define 'buildForm' (UserType / Line 14) with remove 'updateAt' and 'createdAt'
* (http://symfony.com/doc/2.8/reference/forms/types.html)
* Add 'use AML\UserBundle\Form\UserType;' to use UseType file to create userform.
* Define private 'createCreateForm' function and add POST method
* Add 'aml_user_create' route to use in form create and send info. Important to add 'methods: POST'
* Create form layout in 'add.html.twig' http://symfony.com/doc/2.8/forms.html
* Define createAction in UserController.php to send form data.
* Define updateAt and createdAt with DateTime()
* Encode password in user entity (define in security.yml - app/config) (Line 25)
* Add in header of Entity/User and User class implements UserInterface;
* Add override methods and encode password in UserController createAction function (Line 70)

10.- Validate forms (https://symfony.com/doc/2.8/validation.html)

* Add 'use Symfony\Component\Validator\Constraints as Assert;' in Entity to use to create form.
*


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

 3.- php app/console doctrine:schema:update --force --dump-sql --ansi


  [Doctrine\DBAL\DBALException]                                                                    
  Unknown database type enum requested, Doctrine\DBAL\Platforms\MySqlPlatform may not support it.  

http://stackoverflow.com/a/12925885/3655781
