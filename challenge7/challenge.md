# Challenge 7: Continued Web Development: Primitively storing data

### Description

Now that we are going into developing a proper website and application we need to start thinking about storing userdata.
Normally you would do this using a Database Provider like MySQL or POSTgres but these are a little overkill for your
little website at this point in time.

A common alternative is to store data into files, these files can be of many types. We commonly store data in JSON
format even in PHP or other backend languages, we can easily do this in our PHP scripts.

### Sources/Prerequisites

1. Source code from Challenge 6

### The challenge

Remember our contact web page you made, now it's time to use it in some meaningful way. What you are going to have to do
now is the following:

1. Extend your `contact.php` script to save the valid inputted data to a `contact.json` file.
2. Append all new submissions to this file without deleting older ones.
3. Show the contents of this file on the Dashboard of our Admin when they are logged in.

This will test 2 things, one using a backend to store data and secondly using PHP to show more information on the front
end.

### Completion Checklist

- [ ] When a user submits a valid contact form store the data to a file
- [ ] Read and display the contents of this file to your Dashboard web page when the admin is logged in.

## Extras!

Now that you have done this move the valid username and passwords to a `users.json` file and add yourself to it with a
new password. You'll need to change your`login.php` script to open this file and check if any of the user's input is
valid. Test that doing so works with your webpage!

This will now let you have multiple different users who can login and you should know if it works by seeing the
different username on your webpage.
