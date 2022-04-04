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

In PHP we have two very helpful functions we can use, firstly `file_get_contents(XXXX)` and
secondly `file_put_contents(XXXX)`. Where XXXX is the path to your file on disk, you can create an absolute path or a
relative path for this one.

To briefly cover the difference between path types look below:

1. Relative path

A relative path is the most common path that you can come up with and are widely used, however, they have some drawbacks
in some cases. In PHP for example if a file does not exist PHP will automatically look in it's install folder for a file
of the same name and spit back an error with some silly path you probably won't recognise, so bear that in mind!

Relative paths are always referenced to the point of execution, this is true for almost all languages, so for PHP and
Javascript (or most interpreted languages), this is relative to the location of the PHP script itself. That is what
makes it helpful and super easy to read but harder to debug when things go wrong.

To use relative paths in PHP we do the following `./contact.json` for example, this `./` part tells PHP that the path is
relative to the folder that PHP script you are running in. You can also use `../` to look in the folder above the one
the script is in. By using the two in combination you can navigate the Folder structure quite easily.

For example say we had a project with a folder structure like this:

```
| - data
|       :contact.json
| - api
|       - contacts
|           :contact.php


Where  
- is a folder
: is a file 
```

And we wanted the `api/contacts/contact.php` file to access the `data/contact.json file` we would create the relative
path like this within the `contact.php` file: `"../../data/contact.json"` and that would reference the data file. Please
ask if you do not understand how this is working.

2. Absolute path

The exact file location on disk on the specific machine you are dealing with.

On windows this may be the something similar to the following:
`C:\Users\User\Documents\Project\contact.json`

And this will be similar to any other operating system just with some variance.

Now the issue with an Absolute path reference like this is if you were to copy this exactly to any other machine the
pathing might be completely wrong. For an extreme example the above windows absolute path would not work on any other
operating system for example. But the more fundamental problem is this file might exist in different locations depending
on where the code is being run.

To get around this problem you can generate the absolute path on the fly in most languages. For example say we want to
get the path to `contact.json` in PHP. We can do this by making use of the `__DIR__` global reference. `__DIR__` will
automatically return the path in a string type to the current PHP file.

You can see this in action if you make a file containing this code:

```injectablephp
<?php

echo __DIR__;

?>

```

We can then use this in combination with the relative path (removing the `.`) to make an absolute path to any file
within our project.

```injectablephp
<?php

echo __DIR__ . '/contact.json'; // Example only!

```

The problem with absolute paths is that they are tricky to manage properly and are harder to read. Hence, why we tend to
use relative paths, you should too for now.

### Completion Checklist

- [ ] When a user submits a valid contact form store the data to a file
- [ ] Read and display the contents of this file to your Dashboard web page when the admin is logged in.
- [ ] Make it styled according to your website

## Extras!

Now that you have done this move the valid username and passwords to a `users.json` file and add yourself to it with a
new password. You'll need to change your`login.php` script to open this file and check if any of the user's input is
valid. Test that doing so works with your webpage!

This will now let you have multiple different users who can login and you should know if it works by seeing the
different username on your webpage.
