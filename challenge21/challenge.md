# Challenge 21: Automated Testing and phpunit

### Description

Now that we are starting to build applications that are more complex and have some tricky functionality, we are going to
want a reliable way to test them. Normally most people test things manually, but this can be quite time-consuming, and
you might not always test everything leading to regressions and bugs.

To get around this there are a number of different tools, the most popular one for PHP
being [PHPunit](https://phpunit.de/), which Laravel ships with.

To give a very brief run down of Automated testing there are 3 major keywords to remember plus some extras:

1. Unit testing
2. Feature testing
3. Blackbox testing

For some context I will detail the meaning of each:

1. Unit testing

Unit testing is all about testing the really low level operation of specific operations, this could be something as
simple as making sure a function adds two numbers together correctly, or something as advanced as making sure that data
is correctly saved to a database.

2. Feature testing

Feature testing is all about the high level expectations of a feature, say you have a webpage that requires you to be
logged in to access and if you are logged in displays some data. A feature test would test if a user is not logged in no
data is displayed, but if they are the correct data is being shown. A feature test would not include any tests for how
the login works only that it works, same goes for displaying the data etc.

3. Blackbox testing

Black boxes are used to describe systems/things that we do not see nor need to understand the operations of. A good
example of black box testing is to test a third party library provides the correct result. We do not care how it gets
the result only that it works everytime.

Commonly we write small unit tests to make sure the details of our code are working properly, we would then mix in
higher level testing etc as we get closer to completion of the project.

Now a quick example project showing how PHPunit works is provided, remember to read the `README.md` file included in the
root of `src`.

### Sources/Prerequisites

- The Laravel project from before

### The challenge

Using the documentation on Laravel's website, please generate some tests for all your API and web routes to make sure
they are performing as expected. Please use any resources online to aid you in this.

### Completion Checklist

- [ ] Fix the project in `src/` of this challenge so all tests pass using the warnings/errors produced
- [ ] Create tests for all your API routes
- [ ] Create tests for all your web routes
- [ ] Create any tests for your classes where you added custom functionality

## Expectations

This one may be a bit more involved as you are making use of a new framework for testing. Please take your time to
understand how and why automated testing is incredibly important.

This challenge should take you no more than a couple of days, as your application is really simple.