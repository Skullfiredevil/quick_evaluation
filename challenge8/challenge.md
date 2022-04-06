# Challenge 8: Web dev continued: Advanced Interactivity, Refreshing Data and Server side rendering limitations

### Description

Previously to display new data to our web browser we require the user to reload the webpage or navigate to a different
page to get fresh data. Using the fetch API and the PHP scripts you have already written we can enhance the web
experience by making use of javascript to render HTML instead of PHP.

The main advantage of this is that we can/the user have more control and will no longer have to refresh the whole page
to get up-to-date information.

This is the fundamental limit to what you can do with Server side rendering and why you need to understand where and
when to use it. Server side rendering like what is done with PHP is fantastic at serving static content but cannot deal
with dynamic content without a full page refresh.

To get around this we commonly use Javascript and Server side rendering in a hybrid approach, where we serve static
content using PHP but then anything the user needs to get dynamically we do via Javascript and an API on the server.

### Sources/Prerequisites

1. Code from challenge 7

### The challenge

On your Dashboard page you should be using PHP to render your contact.json file out to the webpage. We can actually get
Javascript to do this instead. But there are a few things we will need to do first.

Firstly you will need to make a `contactAPI.php` file. This file will have to read if the user is logged in:

1. If the user is not logged in we do not let them use the API and respond with a 401 Unauthorised header.
2. If the user is logged in return the `contact.json` file to the user

Once you have this new api you then need to add some javascript to the dashboard page, create a javascript file and add
it to your dashboard webpage.

Now that we have added the Javascript, you will need to use the Fetch API like we have previously to get the data from
our new endpoint, and then show that information on the webpage.

You will then need to add a button that allows the user to refresh the data by sending another Fetch Request.

### Completion Checklist

- [ ] Create a new contact end point
- [ ] Handle user auth state
- [ ] Show the contact messages on your dashboard using Javascript
- [ ] Allow the user to click a button refresh the messages
- [ ] Understand the different between static and dynamic content

## Extras!

Once you have done this you may want to think about showing the user that you are loading by displaying a loading
message or something while the request is being processed.

To test this is working you might want to get your PHP endpoint to take some extra time. In PHP and many languages there
is a sleep function, in PHP's case it's just `sleep(X)` where X is then number of seconds you want to delay the script.
Make use of this to test your loading display.

Make sure to commit your work to your repository.


<hr />

Another extra I would like you to do, is to clean up your project, as I am sure that you have put all of your files
within the root folder. If you have not already done so can you separate all your code into directories based on their
file type/extension.

For example all javascript files should be in a folder `js/` etc for all the different extensions. You will need to
change all your references to these files within your code to make sure that you are making use of the relative path's
correctly.

Once you have completed this you will notice that your `index.php` file no longer loads when you got to the root of your
server.

To fix this move your `index.php` file back to the root of your project and fix the remaining references then it should
work as normal.


