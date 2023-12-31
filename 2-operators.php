<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        .code{
            background-color: #e6e6e6; color:red; font-weight: bold; border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mb-5">
        <p><h2>Operators</h2></p>
        <p>
            In JavaScript, operators are symbols or special characters that perform operations on operands (values or variables). They allow you to manipulate data, perform arithmetic calculations, make comparisons, and more. JavaScript supports various types of operators, which can be categorized into different groups:
        </p>
        <p>
            <b>Primitive type:</b>
            <ul>
                <li> 1. <a href="#arithmetic" id="arithmetic" onclick="arithmeticOperator()">Arithmetic Operators:</a>
                    <ul>
                        <li>Addition: +</li>
                        <li>Subtraction: -</li>
                        <li>Multiplication: *</li>
                        <li>Division: /</li>
                        <li>Remainder (Modulus): %</li>
                        <li>Increment: ++</li>
                        <li>Decrement: --</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    var a = 5;
                    var b = 6;

                    a = a+1;
                    a = a-1;
                    a = a * 1;
                    a = a/1;
                    a = a%1;
                    a++;
                    a--;
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 2. <a href="#assignment" id="assignment" onclick="assignmentOperator()">Assignment Operators:</a>
                    <ul>
                        <li>Assignment: =</li>
                        <li>Add and Assign: +=</li>
                        <li>Subtract and Assign: -=</li>
                        <li>Multiply and Assign: *=</li>
                        <li>Divide and Assign: /=</li>
                        <li>Modulus and Assign: %=</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    var a = 5;
                    var b;

                    b = a;
                    a+=1;
                    a-1=1;
                    a*=2;
                    a/=2;
                    a%=2;
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 3. <a href="#comparison" id="comparison">Comparison Operators:</a>
                    <ul>
                        <li>Equal to: ==</li>
                        <li>Not equal to: !=</li>
                        <li>Strict equal to: ===</li>
                        <li>Strict not equal to: !==</li>
                        <li>Greater than: ></li>
                        <li>Greater than or equal to: >=</li>
                        <li>Less than: < </li>
                        <li>Less than or equal to: <=</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    let isEqual = a === b; // Strict equality comparison
                    let isGreater = a > b; // Greater than comparison
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 4. <a href="#logical" id="logical">Logical Operators:</a>
                    <ul>
                        <li>Logical AND: &&</li>
                        <li>Logical OR: ||</li>
                        <li>Logical NOT: !</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 4. <a href="#bitwise" id="bitwise">Bitwise Operators:</a>
                    <ul>
                        <li>Bitwise AND: &</li>
                        <li>Bitwise OR: |</li>
                        <li>Bitwise XOR: ^</li>
                        <li>Bitwise NOT: ~</li>
                        <li>Left Shift: <<</li>
                        <li>Right Shift: >></li>
                        <li>Unsigned Right Shift: >>></li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 5. <a href="#bitwise" id="bitwise">Bitwise Operators:</a>
                    <ul>
                        <li>Bitwise AND: &</li>
                        <li>Bitwise OR: |</li>
                        <li>Bitwise XOR: ^</li>
                        <li>Bitwise NOT: ~</li>
                        <li>Left Shift: <<</li>
                        <li>Right Shift: >></li>
                        <li>Unsigned Right Shift: >>></li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 6. <a href="#ternary" id="ternary">Ternary (Conditional) Operator:</a>
                    <ul>
                        <li>The ternary operator is the only JavaScript operator that takes three operands. It is a shorthand for the if-else statement.</li>
                        <li>Syntax: condition ? expression1 : expression2</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    
                </code>
            </pre>
        </p>
        <p>
            <ul>
                <li> 6. <a href="typeoperators" id="typeoperators">Type Operators:</a>
                    <ul>
                        <li>typeof: Returns the data type of a variable.</li>
                        <li>instanceof: Checks whether an object is an instance of a specific class.</li>
                    </ul>
                </li>
            </ul>
            <pre class="code">
                <code>
                    
                </code>
            </pre>
        </p>
        <p>
            <b>Non-primitive types:</b>
            <ul>
                <li>
                    Primitive data types can store only a single value. To store multiple and complex values, non-primitive data types are used.
                </li>
                <li>
                    Object - Used to store collection of data.
                </li>
            </ul>
            <pre class="code">
                <code>
                    // Collection of data in key-value pairs
                        var obj1 = {
                            x: 43,
                            y: "Hello world!",
                            z: function(){
                            return this.x;
                        }
                    }
                    // Collection of data as an ordered list
                    var array1 = [5, "Hello", true, 4.1];
                </code>
            </pre>
        </p>
        
        <a href="index.php" class="btn btn-success btn-sm"><< Prev Page</a>
        <a href="3-Hoisting.php" class="btn btn-success btn-sm float-end">Next Page >></a>
    </div>


    <script>
        function arithmeticOperator(){
            var a = 5;
            var b = 6;

            alert('a = '+a);
            alert('b = '+b);
            a = a+1;
            alert('a = a+1 = '+a);
            a = a-1;
            alert('a = a-1 = '+a);
            a = a * 1;
            alert('a = a*1 = '+a);
            a = a/1;
            alert('a = a/1 = '+a);
            a = a%1;
            alert('a = a%1 = '+a);
            a++;
            alert('a++ = '+a);
            a--;
            alert('a-- = '+a);
        }

        function assignmentOperator(){
            var a = 5;
            alert('a= '+a);
            var b;
            alert('b= '+b);

            b = a;
            alert('b = a :'+b);
            b+=1;
            alert('b+=1 :'+b);
            b-=1;
            alert('b-=1 :'+b);
            b*=2;
            alert('b*=2 :'+b);
            b/=2;
            alert('b/=2 :'+b);
            b%=2;
            alert('b%=2 :'+b);
        }
    </script>
</body>
</html>