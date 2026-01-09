<!DOCTYPE HTML>

<html>

<head>
    <title>3. Casting and numeric utilities</title>
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
        <div class="row justify-content-center">
            <h1 class="display-4 text-center my-4">3. Casting and numeric utilities</h1>
            <hr class="w-50">
        </div>

        <div class="row justify-content-center my-2">
            <div class="col-8">
                <h3>3.1 Casting</h3>
            </div>
            <div class="col-8">
                <p>This document will cover how data type casting is performed in <code>php</code> and some interesting
                    numeric manipulation functions that may prove useful in data analysis. Type casting is especially
                    useful when we have to juggle with numbers that are represented as characters or strings and
                    viceversa. This is just one use care, however, and type casting may prove useful in ways we cannot
                    predict, especially if our project involves plenty of input dispatching and complex class types.</p>
                <p>Casting is performed on a by type basis, and as such, the syntax is clear. The standard method for
                    casting looks like this: <code>(cast_type)$my_variable</code>. Below, we can find several simple
                    casting examples between any two of the fundamental types.</p>
                <pre class="col-12 borders bg-light">
&lt;?php
    <span style="color:red;">$intVar</span> = 42;
    <span style="color:red;">$stringVar</span> = (string) <span style="color:red;">$intVar</span>;
    var_dump(<span style="color:red;">$stringVar</span>);

    <span style="color:red;">$floatVar</span> = 3.14;
    <span style="color:red;">$intCast</span> = (int) <span style="color:red;">$floatVar</span>;
    var_dump(<span style="color:red;">$intCast</span>);

    <span style="color:red;">$boolVar</span> = true;
    <span style="color:red;">$intFromBool</span> = (int) <span style="color:red;">$boolVar</span>;
    var_dump(<span style="color:red;">$intFromBool</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>string(2) "42"
int(3)
int(1)</strong>
</pre>
                <p>Casting becomes more interesting when converting between objects and arrays. Converting betwen arrays
                    and other fundamental data types will generally yield an array with one element.</p>
                <pre class="col-12 borders bg-light">
&lt;?php
    <span style="color:red;">$nameString</span> = "Bella";
    <span style="color:red;">$nameArray</span> = (array) <span style="color:red;">$nameString</span>;

    print <span style="color:red;">$nameArray</span> . '&lt;br&gt;';

    var_dump(<span style="color:red;">$nameArray</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>Array
array(1) {
  [0]=&gt;
  string(5) "Bella"
}</strong>
</pre>
                <p>Finally, casting between objects and arrays produces what is called an associative array. It is in
                    many ways equivalent to a <code>map</code> or <code>dictionary</code>, as these data types appear in
                    other programming languages. The <code>keys</code> of our associative array are represented by the
                    fields of our object, while the <code>values</code> are represented by their value.</p>
                <pre class="col-12 borders bg-light">
&lt;?php
    class <span style="color:red;">Shipyard</span>
    {
        public <span style="color:red;">$piers</span>;
        public <span style="color:red;">$wharves</span>;
        private <span style="color:red;">$capacity</span>;
        private <span style="color:red;">$dockedShips</span>;

        public function __construct($piers, $wharves, $capacity, $dockedShips)
        {
            $this->piers = $piers;
            $this->wharves = $wharves;
            $this->capacity = $capacity;
            $this->dockedShips = $dockedShips;
        }

        public function information()
        {
            echo "This shipyard has $this->piers piers, $this->wharves wharves, $this->capacity storage capacity, $this->dockedShips currently docked ships.&lt;br&gt;";
        }

        public function dockShip()
        {
            $this->dockedShips++;
        }

        public function undockShip()
        {
            if ($this->dockedShips &gt; 0)
                $this->dockedShips--;
        }
    }

    <span style="color:red;">$myShipyard</span> = new Shipyard(10, 5, 1500, 0);
    $myShipyard-&gt;information();

    <span style="color:red;">$castShipyard</span> = (array) $myShipyard;
    var_dump(<span style="color:red;">$castShipyard</span>);

    print <span style="color:red;">$castShipyard</span> . '&lt;br&gt;';
?&gt;

<hr>
The produced output will be the following:
<strong>This shipyard has 10 piers, 5 wharves, 1500 storage capacity, 0 currently docked ships.
array(4) {
  ["piers"]=>
  int(10)
  ["wharves"]=>
  int(5)
  ["\0Shipyard\0capacity"]=>
  int(1500)
  ["\0Shipyard\0dockedShips"]=>
  int(0)
}
Array</strong>
</pre>
                <p>
                    Casting to <code>NULL</code> has been deprecated since PHP 7.2.0. As such, in order to convert a
                    value to NULL, the assignment operator must be used.
                </p>
                <pre class="col-12 borders bg-light">
&lt;?php
    <span style="color:red;">$myFavoriteInteger</span> = 69;

    print 'My favorite number is: ' . <span style="color:red;">$myFavoriteInteger</span> . '&lt;br&gt;';

    <span style="color:red;">$myFavoriteInteger</span> = NULL;

    var_dump(<span style="color:red;">$myFavoriteInteger</span>);
?&gt;

<hr>
The produced output will be the following:
<strong>My favorite number is: 69
NULL</strong>
</pre>

            </div>
            <div class="col-8">
                <h3>3.2 Numeric utility functions</h3>
            </div>
            <div class="col-8">
                <p>There are many mathematical functions that we may use, depending on what operation is of interest to
                    handling our data. This short chapter won't be a reference of all functions in the <code>php</code>
                    core library, but a compendium of the few most used ones.</p>
                <p><code>Min()</code> and <code>Max()</code> are by far the most useful when it comes to quickly
                    computing the minimum or maximum value, as the name implies, of a numeric sequence. This numeric
                    sequence can be either an array of numbers or a raw series.</p>
            </div>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$test</span> = array(0, 150, -8, -200);

    echo min(<span style="color:red;">$test</span>) . '&lt;br&gt;';
    echo max(<span style="color:red;">$test</span>) . '&lt;br&gt;';

    echo min(9, 5, 1, 2, -50, 19) . '&lt;br&gt;';
    echo max(5, 2, 3, 5, 81, 5, 101) . '&lt;br&gt;';
?&gt;

<hr>
The produced output will be the following:
<strong>-200
150
-50
101</strong>
</pre>
            <div class="col-8">
                <p>As far as number processing goes, the most used functions are <code>abs()</code> for absolute
                    value(modulus) and <code>round()</code> for rounding to the closest integer.</p>
            </div>
            <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$num1</span> = -42;
    <span style="color:red;">$num2</span> = 3.14159;

    echo "Absolute value of $num1: " . abs(<span style="color:red;">$num1</span>) . '&lt;br&gt;';
    echo "Rounded value of $num2: " . round(<span style="color:red;">$num2</span>, 2) . '&lt;br&gt;';
?&gt;

<hr>
The produced output will be the following:
<strong>Absolute value of -42: 42
Rounded value of 3.14159: 3.14</strong>
</pre>
            <div class="col-8">
                <p>For a reference on all available math functions, please access the following link: <a
                        href="https://www.php.net/manual/en/ref.math.php" target="_blank"
                        style="text-decoration: none;">PHP Math Core</a></p>
            </div>
        </div>
    </div>
</body>


</html>