<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugger In Javascript</title>

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
        <h2>Debugger In Javascript</h2>
        <p>
            The debugger is used to debug the code. The remaining section of the code should stop execution before moving on to the next line while debuging. If the browser is not supported the debugger than debugger is will not work.
        </p>
        <p>
            <pre class="code">
                <code>
                    &lt;script&gt;
                        star();
                
                        function star(){
                            var noOfStars = 5;
                            for(var i = 1; i <= noOfStars; i++){
                                debugger;
                                for(var j = i; j<= noOfStars; j++){
                                    document.write('*');
                                }
                                document.write("&lt;br/&gt;");
                            }
                        }
                    &lt;/script&gt;
                </code>
            </pre>
        </p>
        <p id="output">Output: To debug this code open console and <a href="#output" onclick="star()">click</a> here.</p>
        <p>
            <pre class="code">
                <code id="resultOutput"></code>
            </pre>
        </p>
        <a href="2-operators.php" class="btn btn-success btn-sm float-end">Next Page >></a>
    </div>

    <script>
        function star(){
            var noOfStars = 5;
            for(var i = 1; i <= noOfStars; i++){
                debugger;
                for(var j = i; j<= noOfStars; j++){
                    // document.write('*');
                    document.getElementById('resultOutput').innerHTML  += '*';
                }
                document.getElementById('resultOutput').innerHTML  += '<br/>';
                // document.write("<br/>");
            }
        }
    </script>
</body>
</html>