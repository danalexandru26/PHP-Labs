<!DOCTYPE HTML>



<html>

<head>
    <title>Control Flow And Loops</title>
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
                <h1 class="display-4 text-center">5. Control Flow And Loops</h1>
                <hr class="w-50">
                <div class="col-8">
                    <p>In this chapter we will quickly go over what methods of control flow <code>php</code> makes
                        available to the programmer and the proper syntax for correctly using loop structures.</p>

                    <p>Control flow offers the programmer direct means for writing decisional structures. They include
                        or exclude portions of the compiled code generally at runtime although, branch-prediction and
                        compiler optimizations sometimes alter the iterative and expected behavior.</p>

                    <p>Control flow structures in all programming languages are nothing more than <em>syntax
                            wrappers</em> for the machine-code functionality
                        all modern processors inherently provide through their <em>ISA</em>.</p>

                    <p>Loops are repetitive structures that execute a subordinate block of code for as long as the
                        loop's entry and continuation conditions remain <code>true</code>. Loops also imply changes of
                        state through the transformations the bounded variables are subject to.</p>
                </div>
                <div class="col-8">
                    <h3>5.1 If...Else If</h3>
                </div>
                <div class="col-8">
                    <p>This is the main control flow structure. Its keywords are <code>if</code>, <code>elseif</code>
                        and
                        <code>else</code>. If you are literate, it functions exactly how any natural language would make
                        you expect.
                    </p>
                    <pre class="borders bg-light">
&lt;?php
    <span style="color:red;">$shipClass</span> = "Frigate";

    if (<span style="color:red;">$shipClass</span> == "Frigate") {
        print "Everybody knows frigates are faster than destroyers";
    }

    <span style="color:red;">$shipClass2</span> = "Destroyer";

    if (<span style="color:red;">$shipClass2</span> == "Frigate") {
        print "Everybody knows that frigates are not as swift as corvettes";
    } elseif (<span style="color:red;">$shipClass2</span> == "Destroyer") {
        print "Destroyers are the kings of the open oceans";
    } else {
        print "You're the captain of a ragtag raft";
    }
?&gt;

<hr>
The produced output will be the following:
<strong>Everybody knows frigates are faster than destroyers
Destroyers are the kings of the open oceans</strong>
</pre>

                </div>
                <div class="col-8">
                    <h3>5.2 Switch Statements</h3>
                </div>
                <div class="col-8">
                    <p>Switch clauses are extremely similar to <em>if</em> statements. The main difference is that
                        <em>switch</em> statements only work on discrete values, like integers and strings. If both the
                        <em>if</em> and <em>switch</em> clauses use a discrete value, then the function of these two
                        control flow structures is semantically identical. More precisely, for them to be identical,
                        the <em>switch</em> clause needs to have the relevant cases and the default option. The default
                        option performs the role of an exclusive <code>else</code>.
                    </p>
                </div>
                <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$cardValue</span> = 3;

    <span style="color:red;">switch</span> (<span style="color:red;">$cardValue</span>) {
        case 1:
            print "You lost!";
            break;
        case 2:
            print "So close yet not there!";
            break;
        case 3:
            print "You're victorious!";
            break;
        default:
            print "Your card's value is out of the accepted range!";
            break;
    }

    if (<span style="color:red;">$cardValue</span> == 1) {
        print "You lost!";
    } elseif (<span style="color:red;">$cardValue</span> == 2) {
        print "So close yet not there!";
    } elseif (<span style="color:red;">$cardValue</span> == 3) {
        print "You're victorious!";
    } else {
        print "Your card's value is out of the accepted range!";
    }
?&gt;

<hr>
The produced output will be the following:
<strong>You're victorious!
You're victorious!</strong>
</pre>
                <div class="col-8">
                    <h3>5.3 Loops</h3>
                </div>

                <div class="col-8">
                    <p>There are multiple types of loop that we can use, depending on how we want to test against the
                        variable that control the loop's execution. The 4 loop types are as follows :
                        <code>while(condition)</code>, <code>do...while(condition)</code>,
                        <code>for(condition expression)</code>, <code>foreach(iterator)</code>.
                    </p>
                </div>
                <pre class="col-8 borders bg-light">
&lt;?php
    <span style="color:red;">$whileCondition</span> = 5;

    <span style="color:red;">while</span> (<span style="color:red;">$whileCondition</span> &gt; 0) {
        <span style="color:red;">$whileCondition</span> -= 1;
        print 'Current &lt;em&gt;while&lt;/em&gt; condition value: ' . <span style="color:red;">$whileCondition</span> . '&lt;br&gt;';
    }

    print '&lt;br&gt;';

    <span style="color:red;">$doWhileCondition</span> = 1;

    <span style="color:red;">do</span> {
        print 'Current &lt;em&gt;do-while&lt;/em&gt; condition value: ' . <span style="color:red;">$doWhileCondition</span> . '&lt;br&gt;';
        <span style="color:red;">$doWhileCondition</span> += 1;
    } <span style="color:red;">while</span> (<span style="color:red;">$doWhileCondition</span> &lt; 1);

    print '&lt;br&gt;';

    <span style="color:red;">for</span> (<span style="color:red;">$x</span> = 0; <span style="color:red;">$x</span> &lt; 5; <span style="color:red;">$x</span>++) {
        print 'Current &lt;em&gt;for&lt;/em&gt; condition value: ' . <span style="color:red;">$x</span> . '&lt;br&gt;';
    }

    print '&lt;br&gt;';

    <span style="color:red;">$sampleArray</span> = array(1, 2, 3, 4, 5);

    <span style="color:red;">foreach</span> (<span style="color:red;">$sampleArray</span> as <span style="color:red;">$value</span>) {
        print 'Current &lt;em&gt;foreach&lt;/em&gt; value: ' . <span style="color:red;">$value</span> . '&lt;br&gt;';
    }
?&gt;

<hr>
The produced output will be the following:
<strong>
Current <em>while</em> condition value: 4
Current <em>while</em> condition value: 3
Current <em>while</em> condition value: 2
Current <em>while</em> condition value: 1
Current <em>while</em> condition value: 0

Current <em>do-while</em> condition value: 1

Current <em>for</em> condition value: 0
Current <em>for</em> condition value: 1
Current <em>for</em> condition value: 2
Current <em>for</em> condition value: 3
Current <em>for</em> condition value: 4

Current <em>foreach</em> value: 1
Current <em>foreach</em> value: 2
Current <em>foreach</em> value: 3
Current <em>foreach</em> value: 4
Current <em>foreach</em> value: 5
</strong>
</pre>

            </div>
        </main>
    </div>
</body>



</html>