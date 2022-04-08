# Challenge 10: Using Databases in PHP.

### Description

Now that you know how we use SQL in its raw form it is time to make your API work with the new database that you have
created.

### Sources/Prerequisites

1. Source code from challenge 9
2. The MySQL database you created in challenge 9
3. PHP extension pdo enabled

### The challenge

Update your `contactAPI.php` file to make use of the Database.

To get started you will need to create a `PDO` connection to do this let's create a quick function
called `createPdoConnection()`. Following the spec for creating a PDO
connection [here (Title: "Example (PDO)")](https://www.w3schools.com/php/php_mysql_connect.asp).

Once you have created the connection make sure your `createPdoConnection()` returns the `$conn`.

Then you will need to fetch all your contact messages from the database and return them back to your frontend in a way
that your javascript starts to work again.

> You should not need to modify your Javascript in any way for this to work again.

Now to run MySQL queries using the PDO we can make use of the `query(SQL)` method exposed by the PDO object. Now to get
started I will show you how your code should look.

```injectablephp

$conn = createPdoConnection();

$contacts = $conn->query("SELECT * FROM contacts"); // This will be all the contact messages within the contacts table in your database

... Your response code

```

You can see how simple this code is, first we create our PDO using our function we made, then we use the query method to
run raw SQL to fetch everything within the contacts table and store this in a `$contacts` variable for later use.

Once you have done this, we are also going to need to modify your `contact.php`, to save the contact details to the
Database rather than the file we were doing before. Remember to run raw SQL we only need to put it inside our `query`
method on the PDO connection.

Then you will need to modify your `login.php`, to get the user credentials and validate against the database instead of
the file.

You should at this point be able to remove all your `.json` files safely without breaking something.

You should now commit all your work.

### Completion Checklist

1. Create a PDO connection
2. Replace the file access with Database access in your `contactApi.php` file
3. Save contact data using the Database
4. Validate user login's using the database
5. Remove all your `.json` files

## Extras!

Now that you have done all of this, we are actually using our database properly to power our web application. Try adding
testing adding multiple new users and contact messages ensuring everything works correctly.

Something that would also be looking into is SQL injection and the dangers of running SQL code without prepared
statements. There is a great video [here](https://youtu.be/_jKylhJtPmI) explaining what SQL injection is.