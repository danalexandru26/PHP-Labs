<!DOCTYPE HTML>

<html lang="en" data-bs-theme="dark">

<head>
    <title>PHP Forms and Superglobals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/styling.css">
</head>

<body class="medium">
    <div class="container">
        <main>
            <div class="row pt-4">
                <aside class="col-2 d-none d-lg-block ps-4">
                    <div class="position-sticky pt-5" style="top: 4rem">
                        <ul class="list-unstyled my-4" style="font-size:16px;">
                            <li>
                                <a href="http://localhost/PHP_Labs/PHP_Antics/PrintAndEcho.php" target="_blank"
                                    class="text-decoration-none">PHP Print and Echo</a>
                            </li>
                            <li> <a href="http://localhost/PHP_Labs/PHP_Antics/DataTypes.php" target="_blank"
                                    class="text-decoration-none">PHP Data Types</a></li>
                            <li> <a href="http://localhost/PHP_Labs/PHP_Antics/CastingAndUtilityFunctions.php"
                                    target="_blank" class="text-decoration-none">PHP Casting and numeric utilities</a>
                            </li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/Constants.php" target="_blank"
                                    class="text-decoration-none">PHP Constants</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/FlowControlAndLoops.php" target="_blank"
                                    class="text-decoration-none">PHP Control Flow And Loops</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/Functions.php" target="_blank"
                                    class="text-decoration-none">PHP Functions</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/ArrayManipulation.php" target="_blank"
                                    class="text-decoration-none">PHP Array Manipulation</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPFormManip.php" target="_blank"
                                    class="text-decoration-none">PHP Forms</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPFormValidation.php" target="_blank"
                                    class="text-decoration-none">PHP Form Validation</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPGetDispatch.php" target="_blank"
                                    class="text-decoration-none">PHP Dispatch - GET</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPPostDispatch.php" target="_blank"
                                    class="text-decoration-none">PHP Dispatch - POST</a></li>
                        </ul>
                    </div>
                </aside>
                <div class="col-8">
                    <h1 class="display-4 text-center mt-0">PHP Form Validation</h1>
                    <hr>
                    <div>
                        <h3 id="formValidation">Form Validation</h3>
                        <p>The process of form validation involves verifying the authenticity of the data submitted by a
                            user. This is particularly important when dealing with malitious users that are targeting
                            our system through malicious data entries. On the other hand, data validation at a form
                            level is an additional safeguard for the data we insert into our databases.</p>

                        <p>There are multiple ways of validating the user data and safekeeping our web-page and back-end
                            systems against malicious intrusions. We'll split these verifications into two categories,
                            namely:</p>
                        <ul>
                            <li>Action and URL validation</li>
                            <li>Input sanitization and filtering</li>
                        </ul>
                    </div>
                    <div>
                        <h3 id="actionAndUrlValidation">Action and URL Validation</h3>
                        <p>Action and URL validation refers to protecting the <code>action</code> field of our form.
                            Without proper protection, a malitious user could attach additional <code>html</code> syntax
                            to our URL. This could lead to illicit script execution, which often ends up in data
                            breaches and personal information leaks.</p>

                        <p>This problem makes itself evident when we use our form web-page as a form handler. In this
                            scenario, the <code>field</code> looks like this:</p>
                        <pre class="borders">
<span style="color:#569cd6;">&lt;form</span> <span style="color:#dcdcaa;">method</span>=<span style="color:#ce9178;">"post"</span> <span style="color:#dcdcaa;">action</span>=<span style="color:#ce9178;">"&lt;?= $_SERVER['PHP_SELF'] ?&gt;"</span><span style="color:#569cd6;">&gt;</span>
    <span style="color:#569cd6;">&lt;input</span> <span style="color:#dcdcaa;">type</span>=<span style="color:#ce9178;">"text"</span> <span style="color:#dcdcaa;">name</span>=<span style="color:#ce9178;">"name"</span><span style="color:#569cd6;">&gt;</span>
    <span style="color:#569cd6;">&lt;input</span> <span style="color:#dcdcaa;">type</span>=<span style="color:#ce9178;">"submit"</span> <span style="color:#dcdcaa;">value</span>=<span style="color:#ce9178;">"Submit"</span><span style="color:#569cd6;">&gt;</span>
<span style="color:#569cd6;">&lt;/form&gt;</span>
</pre>
                        <p>The superglobal variable <code>$_SERVER['PHP_SELF']</code> contains the name of the current
                            script. It is used to ensure that the form submits to itself, preventing potential
                            redirection attacks. However, it creates the possibility of cross-site scripting (XSS)
                            vulnerabilities if not properly sanitized.</p>
                        <p> To illustrate a basic XSS attack, suppose a malicious user enters the following URL in the
                            address bar:
                        <ul class="list-unstyled">
                            <li><code>http://localhost/PHP_Labs/PHP_Forms/PHPFormValidation.php#formValidation/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E</code>.
                        </ul>
                        </p>

                        <p>This is akin to the following translated URL:
                        <ul class="list-unstyled">
                            <li><code>http://localhost/PHP_Labs/PHP_Forms/PHPFormValidation.php#formValidation/&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;</code>.
                        </ul>
                        </p>
                        <p>Once the form data is completed and submitted, the malicious code will be executed. The
                            script will be run, its data stealing and tampering capabilities being virtually endless,
                            considering your web application is virtually unprotected.</p>
                        <p>In order to prevent such an attack, we are obliged to use a <code>php</code> core library
                            function, namely <code>htmlspecialchars()</code>. All this function does is escape the
                            sensitive <code>html</code> tag characters. In other words, it converts <code><</code> and
                            <code>></code> to <code>&amp;lt</code> and <code>&amp;gt</code> respectively. This way, we
                            are protected from such insertion attacks.
                        </p>

                        <p>A complete form example that merges PHP and HTML in validating and submittingdata will be
                            found in a separate page, in order for the form to be as self contained as possible. For a
                            quick redirect, please access this link: <a
                                href="http://localhost/PHP_Labs/Labwork/formPage.php">PHP form sample</a>.</p>
                    </div>
                </div>
                <aside class="col-2 d-none d-lg-block ps-4">
                    <div class="position-sticky" style="top: 4rem">
                        <strong class="d-block my-2" style="color:grey">On this page</strong>
                        <hr>
                        <ul class="list-unstyled">
                            <li><a href="#formValidation">Form Validation</a></li>
                            <li><a href="#actionAndUrlValidation">Action and URL Validation</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </main>
    </div>
</body>

</html>