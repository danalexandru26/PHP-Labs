<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <title>Echo and Print in PHP</title>
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
        <h1 class="display-4 text-center my-4">Echo and Print in PHP</h1>
        <hr class="w-50 mx-auto">

        <!-- First centered column -->
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <p>This document will cover the differences between the two most used PHP output functions:
                    <code>Echo</code> and <code>Print</code>.
                </p>
                <p>For all we know, <code>Echo</code> is extremely similar to our shell's display function. It displays
                    the content between quotation marks and parses HTML tags.</p>
            </div>
        </div>

        <!-- Second centered column -->
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <p>In the examples below, both the PHP output and the code snippet that generated it will be provided.
                </p>
            </div>
        </div>

        <!-- Code snippet side-by-side example (if needed) -->
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <pre class="borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = "Bella";
    <span style="color:red;">echo</span> "My Border Collie is named <span style="color:red;">$var</span>&lt;br&gt;";
?&gt;
            </pre>
                <p>The produced output will be the following:</p>
                <pre class="borders bg-light text-center">

My Border Collie is named Bella
                </pre>
                <p>The variable's value was inserted in place. Furthermore, the break tag was also parsed and rendered
                    correctly.</p>
            </div>
        </div>
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <p>Now, let's also look into the functionality of <code>Print</code>. It is very similar to
                    <code>Echo</code>, but it can only output a single string and returns a value (1) upon successful
                    execution. It is also traditionally faster in execution than <code>Echo</code>.
                </p>
                <pre class="borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = "Bella";
    <span style="color:red;">print</span> "My Border Collie is named <span style="color:red;">$var</span>&lt;br&gt;";
?&gt;
        </pre>
                <p>The output is identical to what <code>Echo</code> produces.</p>
                <pre class="borders bg-light text-center">

My Border Collie is named Bella
                </pre>
                <p>Now, as to showcase the main difference between these two output functions, let's examine another
                    example.</p>
                <pre class="borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = "Bella";
    <span style="color:red;">$result</span> = <span style="color:red;">print</span> "My Border Collie is named <span style="color:red;">$var</span>&lt;br&gt;";
    <span style="color:red;">echo</span> "<span style="color:red;">$result</span> &lt;br&gt;";
    <span style="color:red;">echo $var</span>, " is", " a", " bad", " girl";
?&gt;
        </pre>
                <p>This will produce the following output:</p>
                <pre class="borders bg-light text-center">

My Border Collie is named Bella
1
Bella is a bad girl
                </pre>
                <p>Not only can we see how <code>Print</code> returns a value, which in our case is 1, it can also be
                    seen that <code>echo</code> can be used to output multiple strings at once, a functionality that
                    <code>echo</code> lacks.
                </p>
            </div>
            <div class="row justify-content-center my-2">
                <div class="col-8">
                    <p>Now, before concluding, there's one more thing we need to take care of. That is, the difference
                        between double and single quotation marks. If we want to include a variable directly into the
                        output statement, as it appears for the echo command, we must use double quotes. A firm example
                        of this can be seen in all the previous <code>php</code> snippets.</p>
                    <p>On the other hand, if we choose to use single quotes, we cannot directly integrate the variable's
                        name into the output string. Instead, concatenation must be used. An example snippet can be seen
                        below:</p>
                    <pre class="borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = "Bella";
    <span style="color:red;">echo</span> 'My Border Collie is named ' . <span style="color:red;">$var</span> . '&lt;br&gt;';
?&gt;
                </div>

            </div>
        </div>
</body>
</html>