# Challenge 19: Using backend frameworks

### Description

Just like for our front end there are numerous options for making backend API's your front end can consume.

Here we are going to focus on a very popular PHP framework [Laravel](https://laravel.com/).

You can find the documentation here: [Laravel 9.x](https://laravel.com/docs/9.x)

### Sources/Prerequisites

- Composer global install

### The challenge

The basic challenge will be to create a new laravel application and to recreate your web application within Laravel. In
many cases you will not be able to reuse code you have already written, you will need to extensively refer to the
documentation often. I would recommend recreating it from scratch and only using the work you did previously as a design
reference rather than code reference.

Another good resource is the Laracasts website and specifically this
resource [Laravel from scratch](https://laracasts.com/series/laravel-8-from-scratch).

You will need to learn how to use the following key features:

1. Blade
2. Migrations
3. MVC controllers and Restful API routes.

You will then need to secure your application, making it work like before in terms of security.

### Completion Checklist

- [ ] Create a new Laravel project in a new directory
- [ ] Create new migrations to make your database
- [ ] Add in your API routes
- [ ] Make use of controllers to handle business logic
- [ ] Make a PHP based front end using Laravel's blade
- [ ] Have completely recreated your web application within Laravel

## Expectations

This task should take about 3 days to complete as the complexity of your web application is still low. In doing this
exercise you will learn a lot about different design principles and opinionated frameworks.

Once you have completed the recreation you should try playing with Laravel's internal features such as caching etc.

You may also find it helpful to install these packages for your application to debug etc.

- barryvdh/laravel-debugbar
- barryvdh/laravel-ide-helper

One provides useful debugging help and the other allows certain IDEs to automatically discover Laravel's features
without needing to install a plugin.