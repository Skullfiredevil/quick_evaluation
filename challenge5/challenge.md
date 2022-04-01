# Challenge 5: Web from scratch continued!

### Description

This challenge will take all the work you did from challenge 4 and ask you to extend the work you completed!

### Sources/Prerequisites

1. The work from challenge 4

### The challenge

In this challenge we will now explore login and logout within PHP.

In PHP there is the concept of a [Session](https://www.w3schools.com/php/php_sessions.asp) which allows us to store
important user data such as their login!

To get started whenever you need to make use of a session we need to tell PHP to start the session. In your `login.php`
add the following line:

```php 
session_start();
```

This will send a Cookie back to the web browser once the connection is completed. If you submit your login form
to `login.php` now, you can actually see this cookie (named: "PHPSESSID") inside the dev tools!

<img width="452" alt="image" src="https://user-images.githubusercontent.com/23214373/160843677-86e42f68-0dbb-4a9a-bcfb-15b1187ffa42.png">


Now this session lets the PHP engine know whenever the browser connects, who has connected using this cookie as part of
the HTTP request. You can see this as part of the request inside the dev tools too!

<img width="452" alt="image" src="https://user-images.githubusercontent.com/23214373/160843699-48b960c0-31ea-4b84-bc8c-28e057536c2e.png">

Now that this is happening we want to validate the user and store some information about the user to our Session.

For now, we will make use of a set of strings to validate the user input, please add this to your `login.php`

```php
$validUsername = 'admin';
$validPassword = 'password';
```

Your task here is to validate the username and password coming from the user is valid and if it is not valid return a
404 Not Found Response.

Once that you have checked they match the valid input we now need to store data to our session telling PHP this!

To store data to the session we can just add to the session array like so

```php 
$_SESSION[YOUR_KEY_HERE] = YOUR_VALUE_HERE;
```

In this case we want to remember that the user is logged in and that their username is `'admin'`. Please add these to
your session as `'is_logged_in'` and `'username'`.

<hr/>

Once you have added that to your session we want to make sure the user cannot login again or access our `login.html`
page.

Now we can do this really quite easily by turning our `.html` page into a `.php` file but be careful to rename the file
to `loginPage.php` otherwise you might replace the existing file called `login.php`. After changing the file extension
you should see that it still works exactly the same!

Now we can add some PHP code to `loginPage.php` right at the top of the file to detect the login state of the user. Add
the below to the very top

```php
<?php
session_start(); // Always remember to start the session 
// Below we are checking if the session has been created before and if it has that it is set to true!
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: index.html'); // This redirects the user to the home page if they are already logged in!
}
// We must tell php that we are done executing php code by closing the php script using the symbol below!
?> 
```

Now that we have added this block to `loginPage.php` we will need to modify the success response of our `login.php` script.

One success we want to navigate the user back to the home page, which we can do with using the exact same code as before! I will let you figure that part out!

### Completion Checklist
- [ ] Touch on Sessions within PHP
- [ ] Added validation logic to `login.php`
- [ ] Stop logged-in users from accessing your login page!
- [ ] Stop a user from being able to log in twice!
- [ ] Understand how we can use Sessions for more power later!

## Extras!
Please make sure to commit this work to your repository!
