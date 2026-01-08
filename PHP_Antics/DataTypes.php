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
    <title>PHP Data Types</title>
</head>


<body>
    <div class="container">
        <div class="row justify-content-center my-2">
            <h1 class="display-4 text-center">PHP Data Types</h1>
            <hr class="w-50 mx-auto">
        </div>
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <p>
                    In all programing languages, data types are the fundamental instruments of information manipulation.
                    They can be thought of as constainers that hold different kinds of data, offering the compiler or
                    interpreter a way to understand and correctly parse the information.
                </p>
                <p>PHP is a weakly typed (or dynamically typed) language, meaning that the programmer does not need to
                    specify the precise type a variable holds upon instantiation. The correct type is automatically
                    determined at runtime. PHP permits the programmer to assign data belonging to any of the following
                    types:</p>
                <ul class="ps-4">
                    <li>Integer</li>
                    <li>Float (or Double)</li>
                    <li>String</li>
                    <li>Boolean</li>
                    <li>Array</li>
                    <li>Object</li>
                    <li>NULL</li>
                </ul>
            </div>
            <div class="col-8">
                <p>Newer versions of PHP actually allow the user to statically assign a variable's type. Nevertheless,
                    PHP
                    continues to be a dynamically typed language. If we wish to know or print the exact type of any
                    variable, we can make use of the <code>var_dump($var)</code> function. An example of its use can be
                    seen below.</p>
            </div>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = 42;
    var_dump(<span style="color:red;">$var</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>int(42)</strong>
            </pre>
            <p class="col-8">In what follows below, examples will be offered for every possible declaration of a
                variable in
                PHP.</p>
        </div>
        <div class="row justify-content-center my-2">
            <div class="col-8">
                <h3>Integers</h3>
            </div>
            <div class="col-8">
                <p>Most of us should already be familiar with integers, they are whole numbers that can be either signed
                    or unsigned. Signed integers have both negative and positive values, within the confines of the
                    defined numerical range. On the other hand, unsigned integers only take nonnegative values (which
                    means, positives including 0).</p>
            </div>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = 69;
    var_dump(<span style="color:red;">$var</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>int(69)</strong>
</pre>
            <div class="col-8">
                <h3>Float</h3>
            </div>
            <p class="col-8">
                Float stands for floating point numbers. Everyone that has done a little bit of math should be familiar
                with this type. It can be used to represent numbers with decimal points or in exponential form.
            </p>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = 707.7;
    var_dump(<span style="color:red;">$var</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>float(707.7)</strong>
</pre>
            <div class="col-8">
                <h3>Boolean</h3>
            </div>
            <p class="col-8">
                Booleans are numerical variables that can represent either one of the two logical states, namely,
                <code>true</code> or <code>false</code>.
            </p>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = false;
    <span style="color:red;">$var_t</span> = true;

    var_dump(<span style="color:red;">$var</span>);
    var_dump(<span style="color:red;">$var_t</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>bool(false)
bool(true)</strong>
</pre>
            <div class="col-8">
                <h3>Strings</h3>
            </div>
            <p class="col-8">
                With numerical data types out of the way, it's time to look into compounds and array structured
                information. The first such data type on our list will be the <code>string</code>. PHP strings are
                <strong>mutable</strong> and can be composed of 1 or more characters. We can access characters using
                the <code>[]</code> operator, similarly to how it works for arrays.
            </p>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$var</span> = "Bella";
    var_dump(<span style="color:red;">$var</span>);

    echo "<span style="color:red;">$var</span> is a bad girl&lt;br&gt;";

    echo <span style="color:red;">$var</span>[0];
?&gt;

<hr>
The produced output will be the following:
<strong>string(5) "Bella"
Bella is a bad girl
B</strong>
</pre>
            <div class="col-8">
                <h3>Arrays</h3>
            </div>
            <p class="col-8">Arrays are continuous packets of data stored into one variable. Arrays can be composed of
                many types,
                numerical or not. For example, we can have arrays of integers, floats or even strings. An array that's
                composed out of more nested array is called a matrix (n-matrix if there exists more than 1 dimension of
                data expansion)</p>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$integerArray</span> = array(1, 2, 3, 4);

    <span style="color:red;">$stringArray</span> = array("Bella", "Maya", "Lucky");

    <span style="color:red;">$matrix</span> = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    <span style="color:red;">$tuple</span> = array("Bella", 1, "Maya", 2, "Lucky", 3);

    <span style="color:red;">$tuple_matrix</span> = array(
        array("Bella", 10),
        array("Maya", 8),
        array("Lucky", 4)
    );

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 2; $col++) {
            echo "{$tuple_matrix[$row][$col]} ";
        }
        echo '&lt;br&gt;';
    }
?&gt;

<hr>
The produced output will be the following:
<strong>Bella 10 
Maya 8 
Lucky 4</strong>
</pre>
            <p class="col-8">The fact that PHP arrays can contain multiple data types on any one of its rows is quite a
                peculiarity that is foreign to most programming languages. This kind of structure is generally referred
                to as a <code>tuple</code> by languages such as <em><code>C++</code></em>.
            </p>
        </div>
    </div>
</body>


</html>