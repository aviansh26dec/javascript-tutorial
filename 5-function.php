<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        .code{
            background-color: #e6e6e6; color:red; font-weight: bold; border-radius: 5px;
        }

        #resultOutput{
            display: table;
            padding-left: 10%;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h2>Function</h2>
        <p>
            In JavaScript, functions are blocks of reusable code that can be defined and invoked to perform specific tasks. Functions play a crucial role in structuring and organizing your code, making it more modular and easier to maintain. Here's an overview of how functions work in JavaScript:        
        </p>
        <p>
            <b>1. Function Declaration:</b>
        </p>
        <p>
            A function can be defined using the function keyword, followed by the function name, a list of parameters enclosed in parentheses, and a block of code enclosed in curly braces. Parameters are placeholders for values that will be passed to the function when it's invoked.
        </p>
        <p>
            Example of a function declaration:
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        great("Avinash Kumar Singh");
                        
                        function great(name){
                        console.log("Hi "+name);
                        }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            <b>2. Function Expression:</b>
        </p>
        <p>A function can also be defined as an expression and assigned to a variable. This is known as a function expression. Function expressions can be anonymous (without a name) or named.</p>
        <p>Example of a named function expression:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        var x = Math.round(Math.random() * (10-1) + 1);
                        var y = Math.round(Math.random() * (10-1) + 1);
                    
                        var multiply = function(x, y){
                            console.log("value of x ="+x);
                            console.log("value of y ="+y);
                            return x * y;
                        }

                        console.log("output of function expression: " + multiply(x, y));
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            <b>3. Arrow Functions (ES6+):</b>
        </p>
        <p>Arrow functions provide a shorter syntax for defining functions, especially when the function body consists of a single expression. They automatically capture the surrounding context's this value.</p>
        <p>Example of an arrow function</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        const square = (x) => x*x;
                        console.log("output of arrow function: " + square( x));
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p><b>4. Function Invocation:</b></p>
        <p>Once a function is defined, you can invoke (call) it by using its name followed by parentheses. You can pass arguments (actual values) to the function's parameters.</p>
        <p>Example of invoking a function:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        greet("Alice"); // Outputs: "Hello, Alice!"
                        var result = multiply(5, 3); // result is 15
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p><b>5. Return Statement:</b></p>
        <p>Functions can return values using the return statement. The value specified after return will be the result of the function, and the function will terminate at that point.</p>
        <p>Example of a function with a return statement:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        function add(a, b) {
                            return a + b;
                        }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <hr>
        <p><b>5. Scope:</b></p>
        <p>A scope in JavaScript defines what variables you have access to. There are two kinds of scope – global scope and local scope.</p>
        <p><b>Global Scope:</b>If a variable is declared outside all functions or curly braces ({}), it is said to be defined in the global scope.</p>
        <p>Once you’ve declared a global variable, you can use that variable anywhere in your code, even in functions.</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        const globalVariable = 'some value'
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>Once you’ve declared a global variable, you can use that variable anywhere in your code, even in functions.</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    const hello = 'Hello CSS-Tricks Reader!'

                    function sayHello () {
                      console.log(hello)
                    }
                    
                    console.log(hello) // 'Hello CSS-Tricks Reader!'
                    sayHello() 
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>Although you can declare variables in the global scope, it is advised not to. This is because there is a chance of naming collisions, where two or more variables are named the same. If you declared your variables with const or let, you would receive an error whenever a name collision happens. This is undesirable.</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    // Don't do this!
                    let thing = 'something'
                    let thing = 'something else' // Error, thing has already been declared
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            If you declare your variables with var, your second variable overwrites the first one after it is declared. This also undesirable as you make your code hard to debug.
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    // Don't do this!
                    var thing = 'something'
                    var thing = 'something else' // perhaps somewhere totally different in your code
                    console.log(thing) // 'something else'
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>So, you should always declare local variables, not global variables.</p>
        <p><b>Local Scope:</b>Variables that are usable only in a specific part of your code are considered to be in a local scope. These variables are also called local variables.</p>
        <p>In JavaScript, there are two kinds of local scope: <b>function scope and block scope</b>.</p>
        <p>Let’s talk about function scopes first.</p>
        <p><b>Function scope:</b>When you declare a variable in a function, you can access this variable only within the function. You can’t get this variable once you get out of <br/>In the example below, the variable hello is in the sayHello scope:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    function sayHello () {
                        const hello = 'Hello CSS-Tricks Reader!'
                        console.log(hello)
                    }
                    
                    sayHello() // 'Hello CSS-Tricks Reader!'
                    console.log(hello) // Error, hello is not defined
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p><b>Block scope:</b>When you declare a variable with const or let within a curly brace ({}), you can access this variable only within that curly brace.</p>
        <p>In the example below, you can see that hello is scoped to the curly brace:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    {
                        const hello = 'Hello CSS-Tricks Reader!'
                        console.log(hello) // 'Hello CSS-Tricks Reader!'
                    }
                      
                    console.log(hello) // Error, hello is not defined
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>The block scope is a subset of a function scope since functions need to be declared with curly braces (unless you're using arrow functions with an implicit return).</p>
        <p><b>Closures</b></p>
        <p>Whenever you create a function within another function, you have created a closure. The inner function is the closure. This closure is usually returned so you can use the outer function’s variables at a later time.</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    function outerFunction () {
                        const outer = `I see the outer variable!`
                        
                        function innerFunction() {
                            console.log(outer)
                        }
                        
                        return innerFunction
                    }
                      
                    outerFunction()() // I see the outer variable!
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>Since the inner function is returned, you can also shorten the code a little by writing a return statement while declaring the function.</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    function outerFunction () {
                        const outer = `I see the outer variable!`
                        
                        function innerFunction() {
                            console.log(outer)
                        }
                        
                        return innerFunction
                    }
                      
                    outerFunction()() // I see the outer variable!
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p><b>Arguments Object:</b></p>
        <p>Every function in JavaScript has access to an arguments object, which contains all the arguments passed to the function, even if they aren't explicitly declared as parameters. <br> Example using the arguments object:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    function displayArguments() {
                        for (var i = 0; i < arguments.length; i++) {
                          console.log(arguments[i]);
                        }
                    }
                    displayArguments(1, "hello", true);
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>Functions are a fundamental building block of JavaScript programming. They enable code reuse, encapsulation, and help in creating structured and maintainable applications.</p>
        <a href="4-controlflow.php" class="btn btn-success btn-sm"><< Prev Page</a>
        <a href="6-array.php" class="btn btn-success btn-sm float-end">Next Page >></a>
    </div>

    <script>
        console.clear();
        var x = Math.round(Math.random() * (10-1) + 1);
        var y = Math.round(Math.random() * (10-1) + 1);


        //function
        great("Avinash Kumar Singh");

        function great(name){
        console.log("Hi "+name);
        }

        //function expression
        var multiply = function(x, y){
        console.log("value of x ="+x);
        console.log("value of y ="+y);
        return x * y;
        }


        console.log("output of function expression: " + multiply(x, y));

        //arrow function
        const square = (x) => x*x;
        console.log("output of arrow function: " + square( x));


    </script>
</body>
</html>