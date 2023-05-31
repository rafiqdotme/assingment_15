# About Assignment
*please clone this git, go to root directory and run the following command*
```
composer install
```
*For start this application, run*
```
php artisan serve --port=8000
```

## Task 1: Request Validation
Open your Browser and go to the following URL. Hope you find your answer.
```
http://127.0.0.1:8000
```
## Task 2: Request Redirect
Go to Browser and go to the following URL. Hope you find your answer.
```
http://127.0.0.1:8000/home
```
## Task 3: Global Middleware
Go to the project directory then-
01. open app->Http->Middleware->LogRequest.php
02. open app->Http->Kernel.php. Check the line number 19.
03. and see the log data have saved into storage->logs>laravel.log file.
## Task 4: Route Middleware
Go to the project directory then-
01. open routes->web.php file and Check the line 31-39.
02. check app->Http->Middleware->AuthMiddleware.php file.
## Task 5: Controller
Go to the project directory then go to app->Http->Controllers->ProductController.php
Hope you find your answer.
## Task 6: Single Action Controller
Go to the project directory then go to app->Http->Controllers->ContactController.php
Hope you find your answer.
## Task 7: Resource Controller
Go to the project directory then go to app->Http->Controllers->PostController.php
Hope you find your answer.
## Task 8: Blade Template Engine
Go to the project directory then open routes->web.php file and Check the line 44-46
Or you may go to the following URL on your browser.
```
http://127.0.0.1:8000/welcome 
```
