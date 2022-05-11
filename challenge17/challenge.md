# Challenge 17: Webpack and Bundling

### Description

Now that you have been Javascript in multiple places you may have noticed that we are reusing code in multiple places.
Typically, you do this by simply cutting and pasting the code into each file that requires it. In languages like PHP you
have already been using built in tools like `require` or `include`.

However, there is a better way to do this, but unfortunately it requires bundling and technologies like node or webpack.

So we are going to start with Webpack and get your project up and running using it.

To start with we are going to start with a new project and get that off the group and then we are going to be updating
your existing storefront project to the new method.

### Sources/Prerequisites

- NodeJS which you should have installed earlier.

### The challenge

Create a new project directory, init git and init npm like we have done before.

Once done we are going to create a `.gitignore` file inside we are going to put the following:

```gitignore

/node_modules

```

Now I want you to follow along to a video tutorial series
on [laracasts](https://laracasts.com/series/webpack-for-everyone/episodes/1) and stop once you reach and finish episode

### Completion Checklist

- [ ] Understand how to use Webpack
- [ ] Compile down javascript files into the correct bundles
- [ ] Use these bundles within a simple html application
- [ ] Use webpack in your previous challenges code base to reuse functionality

## Expectations

Once you have a small project that used webpack and a working config we are going to go back to your web application
from challenge 16, and we are going to start reducing the amount of code duplication.

Once you have moved at least 3 duplicate functions from are then going to move onto more advanced VueJs loading and
component techniques.

If you do not have any duplicate code I want you to make a new notifications' system that displays a toast notification
when the user adds something to their basket or completes an order. This should all be done using a single function
within a notifications.js file that gets pulled into the relevant places when used. 