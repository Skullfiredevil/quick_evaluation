# Challenge 16: Advanced Database Techniques

### Description

Up till this point we have been doing simple one to one and one to many relationships within our database schema. To get
more out of relational databases we need to learn how to use many-to-many relationships and what Pivot tables are.

### Sources/Prerequisites

1. Your Database from Challenge 15
2. TablePlus or similar program

### The challenge

Convert your ordering mechanism to match the following schema using the techniques described in a video you
have [watched previously](https://youtu.be/Cz3WcZLRaWc?t=968).

```text

orders:
    id
    user_id
    
order_products:
    id
    order_id
    product_id

products:
    id

```

Make sure to add foreign keys and any additional data you need for your website to function.

You may at this time want to learn more about Pivot tables and the corresponding impacts it has on databases and their
design.

You will also need to design a query that selects all the products involved in an order and a query to insert into the
database a new order correctly relating the products.

### Completion Checklist

- [ ] Update your database schema to match the requirements
- [ ] Get your application working
- [ ] Understand how many-to-many relationships operate and why we use them
- [ ] Commit your work

## Expectations

This task shouldn't take much longer than a single day to complete as you should have completed the work from the
previous challenge.

Ensure you understand how to write joins and use the Pivot query.
