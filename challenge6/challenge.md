# Challenge 6: Continued Again

### Description

Now that we have dealt with user logins and using PHP to create client side interactivity, by not allowing them to enter
a page if they are already logged in. You have also seen how PHP can be used to render HTML within the browser without
interference.

Using this knowledge we can also choose to render certain bits or not using what we know about the user.

### Sources/Prerequisites

1. Your source code from Challenge 5.

### The challenge

In this challenge we will be server side rendering on all your pages!

This will mean converting all your `html` files to `php` ones.

Once you have done this you will now need to conditionally render links to other webpages within your website. This will
be unique to your site, meaning you will need to apply what you have learnt so far.

So on all your webpages you will need to only show the `login` link to your login web page if the user is not logged in.
An example of doing something similar is below:

```injectablephp
<?php

if($_SESSION['is_logged_in']) { // If the user is logged in
    echo '<a href="/logout.php">Logout</a>'; // Show an anchor tag with Text Logout and link to `logout.php`
} else {
    echo '<a href="/loginPage.php">Login</a>'; //  Show an anchor tag with Text Login and link to `loginPage.php`
}

?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->
```

You will need to apply this to all your pages.

<hr>

Next we are going to have to add a logout feature to our website! So we can test the work we did before!

Start by creating a `logout.php` file.

Inside which we are going to call a method `session_destroy()`.
> Remember to destroy a session we must first initialise it using the `session_start()` method.

What `session_destroy()` does it tell PHP to invalidate the session cookie that the user sent across, this deletes all
the session data we have saved for the user. This includes the data we saved called `is_logged_in` and our `username` we
stored in the session.

For the user to recreate these bits of data, we will have to get the user to log back in.

<hr>

Next we want to add a place where the user can easily see they are logged in, usually we do this by showing the user
their name somewhere near the top of the screen. On most websites this is all your need to do. Just like before you can
use PHP mixed with HTML to render this!

You must now figure out how to show the `$_SESSION["username"]` to the user somewhere on your webpages that you like
the look of!

### Completion Checklist

- [ ] Convert your HTML pages to PHP
- [ ] Add in a working logout.php script
- [ ] Dynamically update your navigation based on when the user is logged in or not
- [ ] Dynamically show the user their username when they are logged in

## Extras!

Now that you have gotten the basics of using PHP to empower your webpages dynamically, try and create a simple Dashboard
web page that is only available to your logged in users and fill it with some fun content that isn't available anywhere
else on your web page.