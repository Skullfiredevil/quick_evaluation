# Challenge 4: Making a Basic Web Application from Start to Finish!

### Description
In this challenge you will be asked to create a web application from scratch for a customer, this will include basic things 
you have done before in challenges 2 and 3. You will be given a brief and are free to approach the issue however you wish.


### Sources/Prerequisites
- You Should have everything you had before.

### The challenge
This time we will be making a multi-page website rather than a single page. This will use all the skills you had before and should teach you some good approaches to web development.

You will need to make 3 webpages:
1. index.html - Our homepage
2. contactus.html - A contact form page
3. login.html - A login page 

For this challenge you will be designing a webpage for your favourite food! It needs to be a generic thing like Ice-cream or Cake for example.

Using this theme you will need to make all the web content similar to how a company may wish to see it. You make it look anyway you wish and if you need some inspiration look [here](https://websitesetup.org/website-layouts/).

The Homepage `index.html` can contain any details for fun facts you would like etc to make it look legit. 

> It must also contain links to the other pages!

Now the key thing is to test the skills you had in challenge 2 and 3, this means that the following must happen for the other two pages.

Note that all the below webpages should make use of javascript and the fetch API to connect the webpage to the PHP backends.
- `contactus.html` 
  - Must have a contact form for a user to submit a query, something similar to our website [here](https://www.yourmeds.net/contact)
  - This page must submit the inputted data to a `contact.php` script you create
  - `contact.php` must then check the user is inputting the correct data into the different form fields
  - `contact.php` will then once everything is validated respond with a 200 OK message and a json payload signifying success.
  - `contact.php` if it detects a validation error it should respond with a 400 Bad Request message
- `login.html`
  - Must look like a generic login page, use any inspiration you see fit
  - Must submit a username and password to `login.php`
  - `login.php` does not need to do anything for the moment but needs to be present

Once you have completed these basic parts, and critically you are happy with the design move on to the more advanced requirements below.

Please upload this to a new repository before continuing to the next challenge.

### Completion Checklist
- [ ] Created the 3 webpages
- [ ] `index.html` links to the other 2 pages directly
- [ ] You have created a `contact.php` file that takes in the contact form from your `contactus.html` page
- [ ] `login.html` looks like a normal login page and sends a username and password to `login.php`
- [ ] `login.php` is an empty php file 
- [ ] You have uploaded this project to a new repository and made your initial commit

## Extras!
Now is the time to experiment with new designs and extend your understanding of CSS and HMTL. If you enounter anything that makes it difficult for you just ask and we will work through it together.