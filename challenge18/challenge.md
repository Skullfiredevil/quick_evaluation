# Challenge 18: Webpack Extended

### Description

In a lot of different frameworks, Vue included there are mechanisms for further separating Javascript into different
components. This allows the developer to make reusable blocks of code similar to what you had done with your
notifications' system, the only difference being that these are part of the framework and offer more features. In the
case of VueJs these are called Single File Components.

These single file components allow you to make some very powerful files that can be reused and can take advantage of the
reactivity and DOM manipulation abilities of Vue without the confusing global scope.

### Sources/Prerequisites

- Source code from challenge 17

### The challenge

Extend your webpack build path to allow you to use single file components within your website.

There are several steps that we will need to do in order for this to work, firstly we are going to have to include a
number of new dependencies to add to our toolchain/buildchain.

Within your project terminal use NPM to pull in these additional dependencies

```bash 
npm add vue-loader vue-template-compiler vue-style-loader css-loader
```

Once this has finished we are then going to need to modify our `webpack.config.js` file to make use of the new loaders
and plugins, so please add the following:

```javascript
// At the top add 
const {VueLoaderPlugin} = require('vue-loader')

...
rules: [
    ...
        {
            test: /\.css$/,
            use: ['vue-style-loader', 'css-loader']
        },
    {
        test: /\.vue$/,
        loader: 'vue-loader'
    }
    ...
],
    plugins
:
[
    new VueLoaderPlugin()
]

```

These additions will then allow us to make new SFC and import these directly for use.

To get started lets make a simple `.vue` SFC that we are going to import to one of your webpages. Create an `App.vue`
file

```vue

<template>
  <h2>Hello from App.vue!!!</h2>
</template>

<script>
export default {
  name: "App"
}
</script>

<style>

</style>
```

Make sure you then save this file.

Now to make use of this file we need to tell Vue where the components are we can do this in one of two ways and this is
up to you.

### Globally importing SFCs

We can globally import components like this in your core javascript files where we were bootstrapping VueJs before:

```javascript

import {createApp} from 'vue/dist/vue.esm-bundler' // We need to use a specific build of Vue for this to work
import App from 'App.vue'

const app = createApp({});

app.component('App', App); // This globally imports the App SFC so we can use this anywhere

app.mount('#app'); // And we mount it to the DOM as per normal

```

Now inside your html code you may use the x-html component you specified above, so let's try adding:

```html

<div id="#app">
    <App></App>
</div>
```

With this method you can reuse the component as many times as you would like so we can do something like this:

```html

<div id="app">
    <App></App>
    <App></App>
    <App></App>
</div>
```

And you should see 3 of the messages with separate elements.

### Root component mounting

The other method you can use is the root component method.

You can do this similarily to above however there are some slight differences.

```javascript

import {createApp} from 'vue'
import App from 'App.vue'

const app = createApp(App); // Here we are telling VueJs to use the App.vue file as the render component
app.mount('#app'); // And we mount it to the DOM as per normal

```

Our HTML would then look like this

```html 
<div id="app"></div>
```

And nothing else. You should still see the message without any issue, however, in this case you cannot use the `App.vue`
SFC anywhere in your HTML and you can only have one instance.

<hr />

## Why use SFC

Now there are various reasons to do it this way but the biggest advantage to using SFC's is that you can embed SFC
within SFC's.

We can make use of this like so:

1. Imagine we want to list a bunch of objects
2. Imagine each object needs to modify itself only

In this scenario we could do everything within a single Vue app instance. However, it would get very messy quickly and
if we ever needed to add additional features we would have a lot of code to change.

So let's do it this way instead:

__App.vue__

```vue

<template>
  <div>
    <h2>Out list of items</h2>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      items: []
    }
  }
}
</script>

<style>

</style>
```

### Completion Checklist

- [ ] Create your first SFC
- [ ] Extend webpack to allow for bundling of `.vue` files
- [ ] Bundle and deploy your first SFC
- [ ] Use SFC's to construct the entire interface for at least one of your webpages
- [ ] Understand the advantages of this approach

## Expectations

As mentioned in the checklist once you are able to use the SFC's please convert your webpages over to SFC's where
appropriate. This will allow you to separate concerns and understand why we use this approach.

Once you have completed this, on your own use webpack to bundle multiple CSS files and allow that all to be bundled into
a single CSS file for all your webpages.