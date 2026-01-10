<!DOCTYPE HTML>


<html>

<head>
    <title>Functions in PPH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <main>
            <div class="row justify-content-center my-4">
                <h1 class="display-4 text-center">
                    6. Functions in PHP
                </h1>
                <hr class="w-50">
            </div>
            <div class="row justify-content-center my-4">
                <div class="col-8">
                    Functions are blocks of code that generally perform a specific task. Semantically, we can view
                    <em>functions</em> as self contained structures that perform a certain directive while on top of the
                    execution stack. The result(s) produced by the function's execution can sometimes propagate towards
                    the main program block if the function returns once it reaches the end of its instruction cycle and
                    is popped from the top of the stack.<br>
                </div>
                <div class="col-8">
                    <p>
                        A compilation of different functions that differ in how variables are passed and values returned
                        can be found below.
                    </p>
                </div>
                <pre class="col-8 borders bg-light">
&lt;?php
    // void function
    function <span style="color:red;">displayName</span>(<span style="color:red;">$firstName</span>, <span style="color:red;">$lastName</span>)
    {
        print 'First name: ' . <span style="color:red;">$firstName</span> . ' Last name: ' . <span style="color:red;">$lastName</span> . '&lt;br&gt;';
    }

    // returning function
    function <span style="color:red;">computeSum</span>(<span style="color:red;">$a</span>, <span style="color:red;">$b</span>)
    {
        return <span style="color:red;">$a</span> + <span style="color:red;">$b</span>;
    }

    // returning function with explicit return type
    function <span style="color:red;">computeSumExplicit</span>(<span style="color:red;">$a</span>, <span style="color:red;">$b</span>): int
    {
        return <span style="color:red;">$a</span> + <span style="color:red;">$b</span>;
    }

    // default parameter value
    function <span style="color:red;">defaultValue</span>(<span style="color:red;">$a</span> = 50)
    {
        print 'If there is no passed variable, the default will be printed: ' . <span style="color:red;">$a</span> . ' &lt;br&gt;';
    }

    // Sum function with variadic arguments
    function <span style="color:red;">variadicSum</span>(...<span style="color:red;">$a</span>)
    {
        $values = count(<span style="color:red;">$a</span>);
        $sum = 0;

        for ($x = 0; $x &lt; $values; $x++) {
            $sum += <span style="color:red;">$a</span>[$x];
        }

        return $sum;
    }

    // passing by reference
    function <span style="color:red;">passByReference</span>(&<span style="color:red;">$a</span>)
    {
        <span style="color:red;">$a</span> += 10;
    }
?&gt;

<hr>
The produced output will depend on function calls, e.g.
<strong>
displayName("Bella", "Rossi"); 
computeSum(2, 3); 
computeSumExplicit(5, 7); 
defaultValue(); 
variadicSum(1,2,3); 
$a = 5; passByReference($a); echo $a;
</strong>
</pre>
            </div>
        </main>
    </div>

</body>



</html>