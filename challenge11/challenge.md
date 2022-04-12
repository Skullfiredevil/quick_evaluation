# Challenge 11: Dynamic imports, Dependency managers and Packages!

### Description

Importing code is a fundamental skill to develop, learning to adopt packages written by other communities is very useful
in a lot of cases. It can do things from saving you time, providing more performance or even increasing the security of
the sites we build.

Here are the fundamentals:

1. Packages or Package is a collection of code that does a specific function or provides a specific service.
2. You can download packages using a dependency manager
3. Dependency managers keep track of the packages that are in use
4. Dependency managers also track the version of each package in use.

There are many package managers to consider in our small world of PHP and JavaScript, there are 2 big players.

1. [Composer](https://getcomposer.org/)
2. [NodeJs](https://nodejs.org/en/)

For this challenge, we are going to focus on PHP management to start to keep it simple.

All package manages make use of a package store or repository, these are usually websites themselves that you can search
through yourself. For example Composer looks through the following [Packagist](https://packagist.org/) repository.

### Sources/Prerequisites

1. Your code from challenge 10.
2. Composer installation, you can download this [here](https://getcomposer.org/download/).

> Windows users can download an installer, but you will have to scroll down a fair bit because of the site design

> Mac users please install via brew as it is better/easier way to install it

### The challenge

In this challenge we are going to start off by using composer to install a package called `vlucas/phpdotenv` which will
use to allow other users to download your application and quickly set it up on their machine.

Getting started let's search for the package on the website and see if it
is [available](https://packagist.org/?query=dotenv).

Once you have located the package if you scroll down the package description you should see a README section that
contains installation instructions. This is what you would normally follow on any given package you wish to install,
however, for now you can continue to follow the written instructions here.

Right now that we have located the package, you have found the README time to get started using Composer.

In order for composer to work we must first initialise it in the root of your project, we do this by running the
`composer init` command in a terminal: which will give you a series of prompts which we will fill in together:

> image here

For the package name and description just press `enter` and leave these are their defaults.

For the Author let's skip that by pressing the `n` key and then `enter`.

Minimum stability we will just press `enter`.

Package type we will type in the word `project` and then press `enter`.

Licence we will just press `enter`.

For the next three questions we will type `no` and the press `enter` to each.

Once you have done this you should see a sample of what your composer configuration will look like, you will also be
prompted to accept this which we do by typing `yes` and pressing `enter`.

> image here

Once you have completed the above you should see a `composer.json` file added to the root of your project and it should
have contents similar to below:

```json 
{
    "name": "michaelsievenpiper/temp",
    "type": "project",
    "require": {}
}
```

This composer.json file is incredibly important as it stores the details of all of your `require` dependencies. You will
see this in action in a moment.

Now to add in the `vlucas/phpdotenv` package we are going use the following command:
`composer require vlucas/phpdotenv` which will tell composer to find the latest compatible version of the package,
download it and install it to your project.

Once the command finishes you should see output similar to below:
> image here

If you look at your project again you should see composer added two things to your project:

1. A new `vendor/` directory.
2. A `composer.lock` file

Now the `vendor/` stores all the code for the packages we downloaded and installed as well as the `autoload.php`
file which PHP needs to be able to load and use the packages.

`composer.lock` is a super important aspect of downloading packages, Composer automatically generates this lock file
each time you download a new package or if you ever choose to update one. Let's open this file and take a look at what
it does, I have taken an extract of mine for us to look at below:

```json 
{
    "_readme": [ // Here we can see what composer describes the lock file as doing
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "0d6f6df3b6a3d321135fb771cfb88b2e", // This hash is used to uniquely identify the composer install
    "packages": [ // Here is the main magic where composer lists all the packages 
        {
            "name": "graham-campbell/result-type", // This isn't the package we installed but a dependency of our installed package 
            "version": "v1.0.4", // All packages must have a specfic version we can install 
            "source": { // Here we can see exactly where we are downloading the code for this package 
                "type": "git",
                "url": "https://github.com/GrahamCampbell/Result-Type.git",
                "reference": "0690bde05318336c7221785f2a932467f98b64ca"
            },
            "dist": { // Here we can see information about how we are downloading the package
                "type": "zip",
                "url": "https://api.github.com/repos/GrahamCampbell/Result-Type/zipball/0690bde05318336c7221785f2a932467f98b64ca",
                "reference": "0690bde05318336c7221785f2a932467f98b64ca",
                "shasum": ""
            },
            "require": { // Here we can see the conditions that need to be met in order for this package to be installed including any packages it is depending on to function.
                "php": "^7.0 || ^8.0",
                "phpoption/phpoption": "^1.8"
            },
            "require-dev": { // This isn't required for us but if you were to download and work on this package yourself this is what you would also need to install
                "phpunit/phpunit": "^6.5.14 || ^7.5.20 || ^8.5.19 || ^9.5.8"
            },
            "type": "library", // Here we can see the type of composer package this is 
            "autoload": { // Autoloading allows us to import namespaces and where that namespace code lives in relation to the project.
                "psr-4": {
                    "GrahamCampbell\\ResultType\\": "src/" 
                }
            }
        },
        ............... // I skipped a bunch of other dependencies for the sake of ease
        { // We can see the actual package we want installed
            "name": "vlucas/phpdotenv",
            "version": "v5.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "264dce589e7ce37a7ba99cb901eed8249fbec92f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/264dce589e7ce37a7ba99cb901eed8249fbec92f",
                "reference": "264dce589e7ce37a7ba99cb901eed8249fbec92f",
                "shasum": ""
            },
            "require": {
                "ext-pcre": "*",
                "graham-campbell/result-type": "^1.0.2",
                "php": "^7.1.3 || ^8.0",
                "phpoption/phpoption": "^1.8",
                "symfony/polyfill-ctype": "^1.23",
                "symfony/polyfill-mbstring": "^1.23.1",
                "symfony/polyfill-php80": "^1.23.1"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "ext-filter": "*",
                "phpunit/phpunit": "^7.5.20 || ^8.5.21 || ^9.5.10"
            },
            "suggest": {
                "ext-filter": "Required to use the boolean validator."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dotenv\\": "src/"
                }
            },
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "https://github.com/vlucas"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
          
        }
    ]
}
```

Now that you know a little about composer and the way it works let's make use of the package that we just downloaded
following the installation guide and use the package properly.

We need to start by creating a new file in the root of your project `.env`, inside there we are going to put in the
following:

```dotenv

DB_HOST=localhost
DB_USER=root
DB_PASS=password

```

You will need to change the values to whatever your MySQL installation requires.

Now to make use of this file and load the values in using the following code in your PHP:

```injectablephp

<?php

require('./vendor/autoload.php'); // In order to make use of the composer packages we need to require the autoload.php file

// Load the .env file using the Package we downloaded
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
$dotenv->load();

// We can then get values from our .env file by doing the following
$username = getenv('DB_USER');
// Or you can get values by using the PHP $_ENV global array
$password = $_ENV['DB_PASS'];

```

Now that we have gotten this far your task will be to use the `.env` file to establish your DB connection in
your `createdPdoConnection()` method you made before in a previous challenge.

### Completion Checklist

- [ ] Initialise composer in your project
- [ ] Install the `vlucas/phpdotenv` using composer
- [ ] Use the package to load the contents of `.env`
- [ ] Use the loaded environment to establish your PDO connection so other can download your project
- [ ] Commit your work to your GitHub.

## Extras!

Now that you have a rough understanding of composer and how to make use of the packages you downloaded.

Let's try and install something that should make development a little easier. Try to install
the [symfony/var-dumper](https://packagist.org/packages/symfony/var-dumper) package and give it a try in a php file and
see what it does.

Try and have a look through some packages that interest you and let us know about them and try to use those if you can.