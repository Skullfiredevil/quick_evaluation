# Challenge 9: Web Development Continued - Actually using real-databases

### Description

Databases are extremely important in any application, web based or not. Databases allow us to store or 'persist' data
permanently and then query or manipulate the data saved accordingly.

There are numerous reasons we use databases but there are two big reasons:

1. Data integrity and Security
2. Performance

These two reasons mean that you will have to learn how to access use and respond data using databases to your
applications in the future. If you are serious about backend development this will be one of the most important skills
to learn.

### Glossary and Acronyms

- DBMS
    - Database Management System
- NRDBMS
    - Non-Relational Database Management System often called a NoSQL Database
- RDBMS
    - Relational Database Management System often called a SQL Database
- Schema
    - The data structure definition within a database, these define things like a table or a set of tables
- Database Table
    - A database table is a definition of columns that make up a small data structure
- Database Columns
    - A column is a part of a table and defines the "key" for a block of data within a record or row
- Record or Row
    - A record (often called row) is a single entry of columns within a table and represents a single entity or entry
- SQL
    - Structured Query Language
- NoSQL
    - Non-Structured Query Language

#### Data Integrity and Security

This is the most important aspect to why we use database's.

Data integrity is the process of ensuring that the data being saved is valid, correct and appropriate. You should read a
bit about it on the [Wikipedia article](https://en.wikipedia.org/wiki/Data_integrity), understand that DBMS's main
responsibility is to make sure that the data you are saving or changing is valid and safely stored.

Data Security is a significant extra that all DBMS's provide, where only authorised Database Users can perform certain
actions. This is incredibly important in many aspects as it protects the data you have stored from malicious actors. You
can find out more [here](https://en.wikipedia.org/wiki/Data_security).

#### Performance

This is always an important consideration for your users and your application. Slow applications are not just
frustrating for your users, but it also can cost you extra money if you have to host the application.

Most DBMS's regardless of their types use clever techniques and technologies to optimise your data for performance,
sometimes this comes with tradeoffs so be mindful in future when you choose you DMBS of choice.

> In database's it's common to come across the concept of indexes and indexing.
>
>Indexes are generated on specific points of data that can significantly improve query performance at the cost of slowing
> down updates or additions of data. We will cover indexes later on in a different challenge.


Here is a very simple representation of how we use database's in a
video: [Database Tutorial for Beginners](https://www.youtube.com/watch?v=wR0jg0eQsZA) please watch this before
continuing.


<hr />

Now that we have covered the basic words and reasons you need to use databases, let us cover the different types of
databases.

1. Relational Database Management Systems (RDBMS).
2. Non-Relational Database Management Systems (NRDBMS)

#### RDBMS

The video you watched before is a prime representation of a RDBMS.

Relational database systems are the most common type you will come across and some of the oldest database technologies.
They have good reason for sticking around, this is because they enforce a very rigid data structure to prevent
developers or users from performing silly actions that could compromise the database in some fashion. Additionally, when
used correctly it minimised or removes data duplication completely.

For now we are going to focus on this and make use of this, but I will be covering NRDBMS below briefly.

#### NRDBMS

Non-relational database systems are often referred to as NoSQL databases. Are used in high performance massive scale
applications where you in advance know exactly what your data structure will be. If you attempt to use it without fully
defining the dataset you will notice quickly that there are massive issues in making simple changes.

Here is a quick video you can use to learn about them [here](https://www.youtube.com/watch?v=0buKQHokLK8).

### Sources/Prerequisites

1. Source code from challenge 8.
2. Watch this [video](https://youtu.be/Cz3WcZLRaWc)
3. MySQL server installed and running
4. Dbeaver or TablePlus installed
5. PHP extension pdo enabled
6. Running MySQL server

### The challenge

In this challenge you are going to convert all your data within your web application into a MySQL database. Then instead
of return data from json files you will need to add the data to appropriate data tables within your database.

You may copy the `res/databaseSchema.sql` file to get started and should see an example of a `users` table for your
application.

You task here is to create your `contacts` table on your own and then insert data into both tables that you can use for
testing. I recommend using Dbeaver/TablePlus to do this or some other Database Management Tool.

Now the next step after creating and inserting data you need to write some raw SQL to a file called `example.sql`.

In this file you need to have the following queries on show:

1. Get all users
2. Get a user where their username and password equals some value
3. Get all contacts
4. Insert a single new contact into the `contacts` table

Now that you have done this and these work appropriately make sure to commit your work.

### Completion Checklist

- [ ] Watched all the videos and understood their content
- [ ] Know what an RDBMS is and why they are powerful
- [ ] Know how to write basic SQL code
- [ ] Know how to create new Databases and Data tables within MySQL
- [ ] Understand how to add data to Data tables

## Extras!

Making sure you understand Database is critical if you ever want to build power applications that people actually want
to use. Therefore, it is important that you make sure that you can not only use a Database but that you understand why
and how they are used.

Before moving onto the next step try and create a new table called orders, this needs to have a foreign key reference to
the `users` table as this will become important later. it should have the following columns as well:
1. `id` make sure it is the same as the tables
2. `user_id`
3. `order_time`
4. `quantity`
5. `item`
6. `order_value`

Make sure to make these columns appropriately for their job.