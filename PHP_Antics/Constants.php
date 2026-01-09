<!DOCTYPE HTML>


<html>

<head>
    <title>Constants and more</title>
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
        <div class="row justify-content-center my-4">
            <h1 class="display-4 text-center">4. Constants</h1>
            <hr class="w-50">
            <div class="col-8">
                <p>This chapter will be quite short because <code>constants</code> are not much to talk about. What's
                    interesting is the langauge specific syntax. There are two keywords to be used in declaring
                    constants, <code>const</code> and
                    <code>define(CONSTANT_NAME, VALUE)</code>. When declaring a constant with <code>const</code> we do
                    not use the variable definition operator <code>&</code>. Constants can be of any type.
                </p>
            </div>
            <pre class="col-8 borders bg-light">
&lt;?php
    define(<span style="color:red;">"SITE_NAME"</span>, <span style="color:red;">"My PHP Tutorial"</span>);
    define(<span style="color:red;">"MAX_USERS"</span>, <span style="color:red;">100</span>);
    define(<span style="color:red;">"ARRAY_CONST"</span>, array(<span style="color:red;">"Hello"</span>, <span style="color:red;">"World"</span>));

    const <span style="color:red;">PI</span> = 3.14159;
    const <span style="color:red;">APP_VERSION</span> = "1.0.0";

    echo SITE_NAME . '&lt;br&gt;';
    echo MAX_USERS . '&lt;br&gt;';
    echo ARRAY_CONST[0] . ' ' . ARRAY_CONST[1] . '&lt;br&gt;';
    echo PI . '&lt;br&gt;';
    echo APP_VERSION . '&lt;br&gt;';
?&gt;

<hr>
The produced output will be the following:
<strong>My PHP Tutorial
100
Hello World
3.14159
1.0.0</strong>
</pre>

        </div>
    </div>
</body>

</html>