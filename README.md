
=======
# AXIOM6

Required Configration:-

 - PHP 7.2
 - Mysql 5.7
 - Laravel 5.7
 - Composer @package_branch_alias_version@ (1.0.0-beta2)
 
Project setup :- 
```
 - $ composer create-project --prefer-dist laravel/laravel Axiom6
```
 Copy .env.example and save it as .env and Write Database configration details
```
 - $ php artisan key:generate
```
For Authentication:-
```
 - $ php artisan make:auth
 - $ php artisan migrate
```

