<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoisting</title>

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
        <h2>Hoisting</h2>
        <p>
            Hoisting is a concept in JavaScript that refers to the behavior of moving variable and function declarations to the top of their containing scope during the compilation phase, before the code is actually executed. This can sometimes lead to unexpected results if you're not aware of how it works.
        </p>
        <p>In JavaScript, variable declarations are hoisted, but not their assignments. This means that the variable name is moved to the top of the scope, but its value is not assigned until the original line of code is executed. Let's look at an example:</p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        console.log(x); // Output: undefined
                        var x = 10;
                        console.log(x); // Output: 10
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        x = 10;
                        console.log(x); // Output: 10
                        var x;
                        console.log(x); // Output: 10
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>In this example, the var x declaration is hoisted to the top of the scope, so the first console.log(x) outputs undefined. The assignment of x = 10 happens later, and the second console.log(x) outputs 10.</p>
        <p>Function declarations are also hoisted. This means you can call a function before its actual declaration in the code:</p>
        <p>
            <pre class="code">
                <code id="resultOutput">
                    &lt;script&gt;
                        foo(); // Output: "Hello, world!"
                        function foo() {
                        console.log("Hello, world!");
                        }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>However, function expressions (anonymous functions assigned to variables) are not fully hoisted. Only the variable declaration is hoisted, not the function assignment:</p>
        <p>
            <pre class="code">
                <code id="resultOutput">
                    &lt;script&gt;
                        bar(); // Error: bar is not a function
                        var bar = function() {
                        console.log("Hello from bar!");
                        };
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>To avoid confusion and potential issues, it's a good practice to declare your variables and functions before you use them. Modern JavaScript (ES6 and later) introduced let and const for variable declarations, which have block-level scoping and do not hoist in the same way as var.</p>
        <p>To summarize, hoisting is a mechanism in JavaScript where variable and function declarations are moved to the top of their scope during compilation. Understanding how hoisting works can help you write more predictable and maintainable code.</p>
        <a href="2-operators.php" class="btn btn-success btn-sm"><< Prev Page</a>
        <a href="4-controlflow.php" class="btn btn-success btn-sm float-end">Next Page >></a>
    </div>

    <script>
        console.log("Output of first code");
        console.log(x); // Output: undefined
        var x = 10;
        console.log(x); // Output: 10

        console.log("=========================");
        console.log("Output of first code");
        foo(); // Output: "Hello, world!"
        function foo() {
        console.log("Hello, world!");
        }

        console.log("=========================");
        console.log("Output of third code");
        bar(); // Error: bar is not a function
        var bar = function() {
        console.log("Hello from bar!");
        };
    </script>
</body>
</html>