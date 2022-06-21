# Challenge 20: Using an ORM and Database Seeding

### Description

By now we are all pretty used to writing SQL by hand, which whilst not difficult can be tedious and in complex
situations be quite difficult to do. To get around this Laravel supplies what is known as an ORM
or [Object–relational mapping](https://en.wikipedia.org/wiki/Object%E2%80%93relational_mapping) framework we can use.

#### ORM

[Laravel's documentation](https://laravel.com/docs/9.x/eloquent) of eloquent is quite robust and will provide a very
good understanding if read thoroughly.

Take for example, your project likely has an `orders` table, `products` table and an `order_products` table.

If we were to write a query by hand to get all the products for an order we would do so like this:

```sql 
SELECT p.* FROM orders o 
JOIN order_products op ON op.order_id = o.id
JOIN products p ON op.product_id = p.id
WHERE o.id = X
```

Now really this is a rather simple query but
with [Eloquent's Relationships](https://laravel.com/docs/9.x/eloquent-relationships) and some boilerplate we can define
this rather easily.

```php

public class Order extends Model {
    
    
    public function products() {
        return $this->belongsTo(Product::class, 'order_products')
            ->withPivot(/*YOUR EXTRA DATA COLUMNS FROM `order_products` HERE*/);
    }

}

```

Now to use this functionality all we need to do is get the order and call the relationship as per the documentation:

```php

$order = App\Models\Order::find(X);

$products = $order->products()->get(); // This returns all the same data 
```

Laravel can be used to define many complex relationships as well as per the documentation so make sure that you use the
correct one for each of the mappings in your models.

#### Database seeding

Once that you understand the eloquent models and how they work we can use them in conjunction with Database Factories
and seeders to scaffold a working simulated application.

[Laravel's documentation](https://laravel.com/docs/9.x/seeding#using-model-factories) shows you how to get stared with
factories and models as well as how to create and use seeders.

Follow the documentation and you should be up and running in no time, start with your simple tables/models first such
as `users` or `products` as they should be the simpliest to model.

Once you have modeled the base entities adding in relational simulations such as orders or addresses should be straight
forward if you look at the example of `hasPosts()`.

#### Considerations

Using an ORM is usually a simple, straightforward and secure way to do things, however, there are contexts where it is
not performant enough. In situations where performance is absolutely critical we may see the need to write a pure SQL
script and execute that.

The advantage is that in Laravel it is a simple as running `DB::select(YOUR_RAW_QUERY_HERE);`, then laravel will just
give you the raw output as a collection of `stdClass` which you can do whatever you like with as you normally would.

In your simple web application, you should never need this but in contexts where you have a very complex or very time
sensitive operation to perform you can use this to make sure that you still get all the protections of the Query
Builder.

### Sources/Prerequisites

- The Laravel project from before

### The challenge

The challenge will be to get all your database tables represented using Eloquent, in doing so you need to define all the
possible relationships so that the models can be used exclusively.

Secondly, in doing this you will also then be able to define new Database factories and seeders, this should allow you
to start fresh and seed good data into your database using this command:

```bash
php artisan migrate:fresh --seed
```

When this command finishes you should be able to see simulated products, orders, users and any other data you feel
should be simulated to get your application working.

The power of this is both portability and testing, as it will allow someone with no knowledge of the system to see how
it works.

### Completion Checklist

- [ ] Use Eloquent models and relationships to do all SQL queries
- [ ] All your models should have a corresponding factory if appropiate
- [ ] You should be able to seed your database to simulate your application working
- [ ] There should be no `DB::X` or raw sql queries anywhere in your application.

## Expectations

This one should be relatively simple, and shouldn't take you too long to do. 
