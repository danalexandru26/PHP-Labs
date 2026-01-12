<!DOCTYPE HTML>


<html>

<head>
    <title>Array Manipulation</title>
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
                <h1 class="col-8 display-4 text-center">7. Array Manipulation</h1>
                <hr class="w-50">

                <div class="col-8">
                    <p class="my-4">
                        We've already covered the <code>array</code> data type. This chapter will provide some more
                        information on how arrays can be manipulated with various <code>php</code> core library
                        functions.
                    </p>

                    <p class="my-4">
                        These functions will help us <em>push</em> elements to our arrays and <em>delete</em> or
                        <em>update</em> them. Furthermore, there are functions that can <code>sort</code> the elements
                        of our array according to an intrinsic or used-defined comparator.
                    </p>
                    <p class="my-4">A multitude of examples on how any of these actions are performed can be found in
                        the code snippet region below.</p>
                </div>
                <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$declareStringArray</span> = array("bella", "Maya", "Lucky");

    // Array elements are updated using the assignment (=) and access ([]) operators.
    <span style="color:red;">$declareArray</span>[0] = 2;
    <span style="color:red;">$declareStringArray</span>[0] = "Bella";

    // The number of elements an array has can be found with the count(array) function.
    print count(<span style="color:red;">$declareArray</span>) . '&lt;br&gt;';

    for ($i = 0; $i &lt; count(<span style="color:red;">$declareArray</span>); $i++) {
        print 'Current <em>array</em> value: ' . <span style="color:red;">$declareArray</span>[$i] . '&lt;br&gt;';
    }

    for ($i = 0; $i &lt; count(<span style="color:red;">$declareStringArray</span>); $i++) {
        print 'Current <em>string array</em> value: ' . <span style="color:red;">$declareStringArray</span>[$i] . '&lt;br&gt;';
    }

    // Adding multiple items with array_push
    array_push(<span style="color:red;">$declareArray</span>, 6, 7, 8);

    for ($i = 0; $i &lt; count(<span style="color:red;">$declareArray</span>); $i++) {
        print 'Updated <em>array</em> value: ' . <span style="color:red;">$declareArray</span>[$i] . '&lt;br&gt;';
    }

    array_push(<span style="color:red;">$declareStringArray</span>, "Vero", "Max");

    for ($i = 0; $i &lt; count(<span style="color:red;">$declareStringArray</span>); $i++) {
        print 'Updated <em>string array</em> value: ' . <span style="color:red;">$declareStringArray</span>[$i] . '&lt;br&gt;';
    }

    // Adding single element using [] syntax
    <span style="color:red;">$declareArray</span>[] = 100;
    print 'Final <em>array</em> value: ' . <span style="color:red;">$declareArray</span>[count(<span style="color:red;">$declareArray</span>) - 1] . '&lt;br&gt;';

    // Merging arrays
    <span style="color:red;">$mergedArray</span> = array_merge(<span style="color:red;">$declareArray</span>, [101, 102]);

    for ($i = 0; $i &lt; count(<span style="color:red;">$mergedArray</span>); $i++) {
        print 'Merged <em>array</em> value: ' . <span style="color:red;">$mergedArray</span>[$i] . '&lt;br&gt;';
    }

    // Mixing types
    array_push(<span style="color:red;">$declareArray</span>, "Uni");
    <span style="color:red;">$declareArray</span>[] = "Nebula";

    for ($i = 0; $i &lt; count(<span style="color:red;">$declareArray</span>); $i++) {
        print 'Final mixed <em>array</em> value: ' . <span style="color:red;">$declareArray</span>[$i] . '&lt;br&gt;';
    }
?&gt;
</pre>
                <div class=" col-8 my-4">
                    When it comes to deleting array elements, there are multiple functions that we may use. The two most
                    useful ones are <code>array_pop()</code> and <code>array_shift().</code> Popping an element from the
                    array removes the last(tail) entry. Conversely, shifting the elements of an array removes the
                    first(head) entry. Please check the examples below.
                </div>
                <pre class="col-8 borders bg-light">
&lt;?php
    function printArray(&amp;<span style="color:red;">$myArray</span>)
    {
        foreach (<span style="color:red;">$myArray</span> as <span style="color:red;">$entry</span>) {
            print <span style="color:red;">$entry</span> . ' ';
        }
        print '&lt;br&gt;';
    }

    <span style="color:red;">$nameArray</span> = array("Paul", "Feyd", "Shaddam", "Irulan");

    printArray(<span style="color:red;">$nameArray</span>);

    array_pop(<span style="color:red;">$nameArray</span>);

    printArray(<span style="color:red;">$nameArray</span>);

    array_shift(<span style="color:red;">$nameArray</span>);

    printArray(<span style="color:red;">$nameArray</span>);
?&gt;

<hr>
<strong>Output:</strong><br>
Paul Feyd Shaddam Irulan <br>
Paul Feyd Shaddam <br>
Feyd Shaddam <br>
</pre>
                <p class="col-8 my-4">
                    If we desire to sort the array, there are a multitude of functions that we may employ depending on
                    how the array is structured( whether it is multidimensional, associative or regular). The two most
                    useful sorting functions for regular indexed arrays are <code>sort</code>, for sorting in an
                    ascending order, and <code>rsort</code>, for sorting in a decreasing order.
                </p>

                <pre class="col-8 borders bg-light">
&lt;?php
    function printArray(&amp;<span style="color:red;">$myArray</span>)
    {
        foreach (<span style="color:red;">$myArray</span> as <span style="color:red;">$entry</span>) {
            print <span style="color:red;">$entry</span> . ' ';
        }
        print '&lt;br&gt;';
    }

    <span style="color:red;">$numericArray</span> = array(6, 5, 4, 3, 10, 1);

    sort(<span style="color:red;">$numericArray</span>);

    printArray(<span style="color:red;">$numericArray</span>);

    rsort(<span style="color:red;">$numericArray</span>);

    printArray(<span style="color:red;">$numericArray</span>);
?&gt;

<hr>
<strong>Output:</strong><br>
1 3 4 5 6 10 <br>
10 6 5 4 3 1 <br>
</pre>
                <p class="col-8 my-4">
                    For a full reference on array functions, please access the following link: <a
                        href="https://www.php.net/manual/en/ref.array.php" target="_blank"
                        style="text-decoration:none;">Array Function Reference.</a> </p>

        </main>
    </div>
</body>



</html>