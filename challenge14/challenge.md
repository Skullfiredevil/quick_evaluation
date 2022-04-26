# Challenge 14: Front end Dependency management.

### Description

Similar to the way we do dependency management in PHP we can do the same within Javascript using NodeJs and NPM (Node
Package Manager).

### Sources/Prerequisites

1. Your code from challenge 13 with the adaptions made for challenge 12
2. [NodeJs](https://nodejs.org/en/)

### The challenge

We are going to start off by referencing our own Vue instance rather than the one in the CDN we were using before in 13
to use a local instance. Just like before using composer we need to initialise the node project first. We do this by
using the command `npm init`. Answer the questions appropriately or just hit `enter` on each option to get the default
output.

Once you have completed this you should see that Node has created a new `package.json` file.

If we open it up you should see something similar to this:

```json
{
  "name": "res",
  "version": "1.0.0",
  "description": "Firstly copy `.env.example` into a `.env` file and replace the contents with whatever your local installation is.",
  "main": "index.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "",
  "license": "ISC"
}
```

Now this package.json is very similar to a composer.json file, with some extra bits related to Node. For now let's leave
this file alone and go back to the command line.

Now to add Vue to a local installation using NPM we need to run the following command `npm add vue@3`. Once that has
completed you should see 2 new additions to your project.

- `package-lock.json` - this is the same thing as the `composer.lock` file
- `node_modules/` - this is where all the code we install using NPM is put just like the `vendor/` folder for composer

Now if we open back up `package.json` we should see a new entry to the JSON file:

```json
{
  "name": "res",
  "version": "1.0.0",
  "description": "Firstly copy `.env.example` into a `.env` file and replace the contents with whatever your local installation is.",
  "main": "index.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "",
  "license": "ISC",
  "dependencies": {
    // This is new 
    "vue": "^3.2.33"
  }
}
```

Now inside the `node_modules/` directory we should see a `vue/` folder inside there we have a `dist/` folder and in
there we have an exact copy of what we are downloading from the cdn, a file called `vue.global.js`.

Knowing this instead of:

```html

<script src="https://unpkg.com/vue@3"></script>
```

We can use our local version of the same:

```html

<script src="/node_modules/vue/dist/vue.global.js"></script>
```

And it all should still work if you try this on your webpage.

Now our website is no longer dependent on a third party to get running and working.

Now just like your `vendor/` directory, we need to add `node_modules/` to your `.gitignore` file, this is so we do not
commit the code to your repository.

### Completion Checklist

- [ ] Using NPM install and use VueJS on your website
- [ ] Understand how to add dependencies using NPM
- [ ] Get your webpage up and running using only local assets.

## Extras!

Get all webpages you have using local VueJs installation. Additionally, just like with composer there is a global
repository you can search, find the website and lookup VueJS on it.

I would also like you to download and install a package called `axios`. I would then like you to use this package using
their instructions on your dashboard instead of the Fetch API.