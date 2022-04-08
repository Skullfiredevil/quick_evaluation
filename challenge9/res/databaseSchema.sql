-- remove existing tables before we create new ones
DROP TABLE IF EXISTS users, contacts;

CREATE TABLE users
(
    id       INTEGER AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


-- FIXME: Here you need to define your own contacts table according to your contacts form
-- It is good practice to add a primary key column to your database typically these are in the form of an auto incrementing ID
CREATE TABLE contacts
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY
);