<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>

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
        <h2>Control Flow</h2>
        <p>
            Control flow in JavaScript refers to the order in which statements and expressions are executed in a program. It determines how the program progresses from one statement to another based on certain conditions. JavaScript provides several control flow structures that allow you to manage the flow of your code.
        </p>
        <p>Here are some key aspects of control flow in JavaScript:</p>
        <p>
            <b>1. Conditional Statements:</b>
            <ul>
                <li>`if`: Executes a block of code if a given condition is true.</li>
                <li>`else`: Executes a block of code if the condition in an `if` statement is false.</li>
                <li>`else if`: Allows you to check multiple conditions in sequence.</li>
                <li>`switch`: Allows you to choose between different blocks of code based on the value of an expression.</li>
            </ul>
            <b>Example using `if` and `else`:</b>
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        var age = 18;

                        if (age >= 18) {
                        console.log("You are an adult.");
                        } else {
                        console.log("You are a minor.");
                        }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            <b>2. Loops:</b>
            <ul>
                <li>`for`: Repeats a block of code for a specific number of times.</li>
                <li>`while`: Repeats a block of code while a condition is true.</li>
                <li>`do...while`: Similar to `while`, but ensures that the block of code is executed at least once.</li>
                <li>`for...in`: Iterates over the properties of an object.</li>
                <li>`for...of`: Iterates over the values of an iterable object (e.g., arrays, strings).</li>
            </ul>
            <b>Example using `for` loop:</b>
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    for (var i = 1; i <= 5; i++) {
                        console.log(i);
                    }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            <b>3. Jump Statements:</b>
            <ul>
                <li>`break`: Terminates the current loop or switch statement and transfers control to the statement immediately following the loop or switch.</li>
                <li>`continue`: Ends the current iteration of a loop and jumps to the next iteration.</li>
                <li>`return`: Exits the current function and optionally provides a value to the caller.</li>
            </ul>
            <b>Example using `break` and `continue`:</b>
        </p>

        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                    for (var i = 1; i <= 10; i++) {
                        if (i === 5) {
                          continue; // Skip iteration if i is 5
                        }
                        if (i === 8) {
                          break; // Exit loop if i is 8
                        }
                        console.log(i);
                    }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p>
            Control flow structures enable you to create dynamic and responsive programs by making decisions and controlling how your code is executed under different conditions. Properly understanding and utilizing control flow is essential for writing effective and efficient JavaScript code.
        </p>
        <a href="3-Hoisting.php" class="btn btn-success btn-sm"><< Prev Page</a>
        <a href="5-function.php" class="btn btn-success btn-sm float-end">Next Page >></a>
    </div>
</body>
</html>