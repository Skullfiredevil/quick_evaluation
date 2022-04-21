# Challenge 13: Using front end frameworks.

### Description

To get you introduced to the concept of frameworks we will start with the most common and often most common use case of
a framework. As you have seen with Javascript there are so many aspects to control and manage, from fetching data all
the way to handling button presses and mouse clicks etc. It can be quite a cumbersome to manage all of this yourself, so
a bunch of like-minded individuals have created a package referred to as a framework.

The point of a framework is to reduce time surface complexity of your code and provide features that you would need/want
without having to constantly rewrite code for it.

There are dozens of highly popular frameworks for all sorts of languages but for this challenge we will focus on
Javascript frameworks here I will list some popular ones for you to be aware of:

1. [ReactJs](https://reactjs.org/)
2. [VueJs](https://vuejs.org/)
3. [InertiaJs](https://inertiajs.com/)

Now for the sake of ease we will focus on a single one of these; VueJs.

### Sources/Prerequisites

1. Your code from challenge 11 with the adaptions made for challenge 12
2. [NodeJs](https://nodejs.org/en/)
3. [The VueJs Devtools](https://devtools.vuejs.org/)

### The challenge

We are going to follow
the [documentation #Without Build Tools](https://vuejs.org/guide/quick-start.html#without-build-tools) at first to get
your first Vue App running on your Dashboard webpage.

Looking at their code snippet to get a basic application running let us see what is happening:

```vue

<script src="https://unpkg.com/vue@3"></script> // Download the VueJs core using a CDN

<div id="app">{{ message }}</div> // This is where the VueJs magic happens

<script>
Vue.createApp({ // Here we are actually creating the App
  data() { // Vue Apps or modules have a data() method that gets called at tick updates to return all the data that is required
    return { // We are returning a JSON object back, in Vue all data methods must return a JSON object
      message: 'Hello Vue!' // Here we have a key 'message' with a Value which we are to display to the screen
    }
  }
}).mount('#app') // This tells VueJs to attach the application to the HTML element that has the id #app 
</script>
```

Now for your Dashboard webpage this we do not need to directly copy all of this as you already have existing HTML etc we
want to use.

Firstly, let's start by getting an application running that we are going to use within your existing HTML. To do so we
need to wrap your entire HTML body in a `<div>` with an id of your choosing. So you should have something that resembles
below:

```html 
<body>
<div id="app">
    ...
    ... YOUR CODE HERE
    ...
    
    <pre>{{message}}</pre> <!-- This is just to check that Vue is working! We'll remove this later -->
</div>
</body
```

Now we need to download the VueJs Core you must do this before you load your dashboard's Javascript so adapt this to
your web design. Do this by adding this the following line to your HTML:

```html 
<script src="https://unpkg.com/vue@3"></script> 
```

Now that we have prepared your HTML we can instantiate a Vue App and use it.

Go to your dashboard Javascript code and add the following at the very end of the file.

```javascript
Vue.createApp({
    data() {
        return {
            message: 'Hello Vue!'
        }
    }
}).mount('#app');
```

> Be sure to mount to the correct id value!

Now that you have done this we should have a working VueJs instance. All being well you should see the message displayed
right at the bottom of your HTML.

<img width="1792" alt="Screenshot 2022-04-20 at 11 22 56" src="https://user-images.githubusercontent.com/23214373/164458480-552e1068-a443-4a77-9da4-1a26decafa5b.png">

Now that we have Vue working let us make use of the core features to get our web application running better.

### Moving Application Logic

To get moving quickly with VueJs let us move all our functions from the Javascript file from before into the `methods`
object of our Vue instance we have created. We do this by adding them to our `createApp` object like so:

```javascript
Vue.createApp({
    data() {
        return {
            message: 'Hello Vue!'
        }
    },
    methods: {
        // This is the method from challenge 12 src/js/messages.js
        fetchMessages: function () { // We have to change syntax slightly within Vue but follow the Key: function() syntax
            const container = document.getElementById('messages-container');
            container.innerHTML = '<div class="loading">Loading... </div>';
            fetch('/api/messages')
                .then(async response => {
                    var body = await response.json();
                    if (response.status == 200) {
                        var string = '';
                        body.data.forEach(message => {
                            string += createHtmlForMessage(message);
                        });
                        container.innerHTML = string;
                    } else {
                        showError(body.messages);
                    }
                });

            // ... YOUR OTHER METHODS 
        }
    }
}).mount('#app');
```

Once your functions have all been moved to within the `methods` object we are now going to have to make further changes
as this will no longer function as intended. So we are going to have to extend what we had previously.

VueJs is quite helpful in the fact that it attaches to the DOM directly and any child element within the tree is
accessible to our Vue app. This allows us to interact with the DOM and use it to template our HTML rather than having to
write it natively within Javascript and replace it.

This allows us to separate concerns, i.e. Javascript handles interactivity and HTML templates handle the DOM rendering
and your styling can always be in a completely separate file.

This is the power of these kinds of Frameworks, allowing the Javascript to do what it is good at.

There are lots of good videos on how to get started with Vue, here are a few I would recommend watching before
progressing.

1. [Conceptualisation of Vue and SPA's etc](https://www.youtube.com/watch?v=YrxBCBibVo0)
2. Basics [Part 1](https://www.youtube.com/watch?v=F7PLPJqVotk)
   and [Part 2](https://www.youtube.com/watch?v=CYPZBK8zUik).

### Data binding

Now on your dashboard you probably do not need this, but it will be useful to know. VueJs offers a number of ways to do
data binding based on properties. Within our HTML we can bind data that is with our `data()` method on our Vue app using
`v-bind:XXX` where `XXX` can be any attribute. The attribute's we can bind to change depending on the HTML tag/element
in question but the general idea is that we can bind new classes, values and things like readonly properties using this
syntax.

Let's say you had an input, we need to get its value, we can do this using Vue like below:

```html
// This is your HTML file
<label for="input">Some Input</label>
<input id="input" v-bind:value="myInput"/>
```

```javascript
// This is your Javascript file
Vue.createApp({
    data() {
        return {
            myInput: 'some input'
        };
    }
});
```

Now the issue with the above example is that we are binding some data without listening for the changes made by the
client. So Vue offers another directive that makes this super easy for us `v-model`. Now if you replaced `v-bind:value`
with `v-model`. This `v-model` directive two-way binds the value within the input the value within the `data()` of our
Vue instance. This allows Vue to react automatically to the users input by listening the `<input>`'s 'input' and '
change' events.

You should familiarise yourself with Vue's binding methods as they are critically important in Vue apps and are most
like the biggest part of what makes Vue powerful.

> Note that `v-bind:` can be entirely replaced with just a `:` and Vue will bind the data in the same way.

### Event handling

First thing we are going to do is to use the vue `v-on` directive to handle our button clicks. Before we were either
using event listeners or the `onclick` button attribute. However, Vue allows us to do something exceedingly simple. As
all DOM elements are capable of launch events, any child element of the Vue Mount element can be queried by Vue for it's
events.

Therefore, we can think of `v-on:XXX` as effectively the same
as `document.getElementById('button').addEventListener('XXX', function)`. With `v-on` we don't even need to use an `id`
attribute in our HTML.

So for your refresh button on your dashboard let's use Vue to handle the click event within our HTML like so:

```vue

<button class="button" v-on:click="XXX">Refresh</button> 
```

Make sure to replace the `XXX` with your function that handles the refresh within your `Vue.createApp`'s `methods`
object.

> Note Vue also has shorthand for this too `v-on:` can be entirely replaced with the `@` symbol and it will exactly the same


Now using this knowledge finish making all your functionality on the dashboard work within

### Completion Checklist

- [ ] Understand and use VueJs in your Dashboard webpage
- [ ] Make use of the interactivity and directives available within VueJs
- [ ] Completely watch the linked Videos and understand how/why Vue operates and what the application is called.

## Extras!

Now I want to convert all your webpages into Vue App's and use it to handle all functions described before. You should
have no HTML in your Javascript and no direct DOM interactions should be required.
