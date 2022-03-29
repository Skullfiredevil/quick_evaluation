# Challenge 3: Servers and Backends

### Description
Now that you have completed challenge 2, you have a decent understanding of what front-end/client side bits you can perform. Now we get onto data management and backends.

We will focus on PHP as this is a web focused language and what we use within the company, and it is a pretty popular option despite its reputation.

It is common on the web to have your client facing application (your javascript/html) fetch data from a backend API (Application Programming Interface). Commonly in JavaScript we do this with the Fetch API builtin to all modern browsers.

### Sources/Prerequisites 
1. Installation of [PHP](https://www.php.net/downloads.php)
   1. Windows users will have a harder time installing this and should seek help!
   2. Mac users please use homebrew to install PHP
2. The IDE/Text editor you used before 
3. A method to run your server 
   1. PHP has this built in you can run this using `php -S localhost:8000`
   2. You may use any other service to get this to run if you are familiar

### The challenge
In this challenge you will be tested in 2 ways, one designing and running a backend application that responds to a fetch request. Secondly, on the Javascript to produce that fetch request.

From this you will need a new project with 3 files:
1. `backend.php`
2. `app.js`
3. `index.html`

### Brief
Your `backend.php` file should contain this array of information right at the top as this will act as your database (databases we will take a detailed look at later):

```injectablephp
$database = [
    'bases' => [
       'thin',
       'deep dish',
       'stuffed crust'
   ],
    'sauces' => [
        'tomato',
        'bbq',
        'chocolate'
    ],
    'flavours' => [
        'cheese',
        'peperoni',
        'ham & pineapple',
        'chicken & bacon',
        'chocolate & candy'
    ],
    'extras' => [
       'chili oil',
       'double up',
       'olives',
       'dipping oil'
   ]
];
```

Now the `backend.php` file should look for a parameter called `query`, this `query` should be one on the following only:
1. "bases"
2. "sauces"
3. "flavours"
4. "extras"

If it is not one of these it should respond with a 404 Not found header, and an empty body.

If the `query` parameter is valid we should then look at our "database" array and respond with a 200 OK header and the array subset as a JSON object.

#### Part 2
You will need to paste this within your HTML file:
```html 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        * {
            padding: 0;
            font-size: 12pt;
        }

        body {
            background-color: #e6e6e6;
            margin: 0;
        }

        main {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .header {
            font-weight: bolder;
            font-size: 2em;
            margin: 0;
            padding: 0.5em;
        }

        .top-bar {
            background-color: darkorange;
            color: white;
            display: flex;
            flex-direction: row;
            box-shadow: 0 0.4em 0.4em #515151;
            height: 4em;
            margin-bottom: 1em;
        }

        .img {
            object-fit: contain;
        }

        .card {
            background-color: white;
            border-radius: 1em;
            padding: 0.5em;
            box-shadow: 0 0.2em 0.6em #515151;
        }

        .form-group {
            width: 60%;
        }

        .column {
            display: flex;
            flex-direction: column;
        }

        .column * {
            margin: 5px;
        }

        .aside {
            width: 30%;
        }
    </style>
    <title>Pizza API 🍕</title>
    <link rel="icon"
          href="https://cdn-icons-png.flaticon.com/512/3595/3595455.png">
</head>
<body>

<div class="top-bar">
    <img class="img" src="https://cdn-icons-png.flaticon.com/512/3595/3595455.png" alt="">
    <div class="header">About our Pizza's!</div>
</div>
<main>
    <div class="form-group card column">
        <div>
            <label for="options">Options</label>
            <select name="options" id="options">
                <option value="bases">Bases</option>
                <option value="sauces">Sauces</option>
                <option value="flavours">Flavours</option>
                <option value="extras">Extras</option>
            </select>
            <button id="submit">Check</button>
        </div>
        <div id="output">
            Please select something to search
        </div>
    </div>
    <aside class="aside card">
        <h2>Useful Resources</h2>
        <div class="column">
            <p>Videos</p>
            <a target="_blank" href="https://www.youtube.com/watch?v=cuEtnrL9-H0">Fetch API</a>
            <p>Documentation</p>
            <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch">Fetch
                API</a>
            <a target="_blank"
               href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise">Promise
                API</a>
        </div>
    </aside>
</main>
<script src="app.js"></script>
</body>
</html>
```

Please make use of the included sources to study on the principles of the Fetch API etc by opening the `index.html` file in your browser.

You will now need to make your Javascript fetch the user input and then display it to the `<div id="output">`. 
You will also need to make use of the fetch API to gather this data from our "database" `backend.php` file.

Once you have the javascript and php file completed and working as per spec please submit this to a new repository for inspection (exactly the same way you did in Challenge 1).


### Completion Checklist

## Extras!

Now there are several techniques or acronyms that you might want to read up on in your own time, these are called API paradigms. The most common of which is named REST API or RESTful 
API which stands for Representational State Transfer. Big words but the just is that the API controls the state of the Data and can return the data, modify the data and then finally delete the data. 
Here is the [wiki](https://en.wikipedia.org/wiki/Representational_state_transfer)

Now the fundamentals are quite simple, so I suggest you read this [article](https://www.redhat.com/en/topics/api/what-is-a-rest-api) after watching this simple [video](https://www.youtube.com/watch?v=6sUbt-Qp6Pg) or this one [here](https://www.youtube.com/watch?v=lsMQRaeKNDk).


Hopefully you'll understand the basics of what makes a backend tick and what REST is!