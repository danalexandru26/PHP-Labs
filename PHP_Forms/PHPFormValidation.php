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
                        <ul class="list-unstyled my-4">
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPFormManip.php" target="_blank"
                                    class="text-decoration-none">PHP Forms</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPGetDispatch.php" target="_blank"
                                    class="text-decoration-none">PHP Dispatch - GET</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Forms/PHPPostDispatch.php" target="_blank"
                                    class="text-decoration-none">PHP Dispatch - POST</a></li>
                            <li>
                                <a href="http://localhost/PHP_Labs/PHP_Antics/PrintAndEcho.php" target="_blank"
                                    class="text-decoration-none">Print and Echo in PHP</a>
                            </li>
                            <li> <a href="http://localhost/PHP_Labs/PHP_Antics/DataTypes.php" target="_blank"
                                    class="text-decoration-none">PHP Data Types</a></li>
                            <li> <a href="http://localhost/PHP_Labs/PHP_Antics/CastingAndUtilityFunctions.php"
                                    target="_blank" class="text-decoration-none">Casting and numeric utilities</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/Constants.php" target="_blank"
                                    class="text-decoration-none">Constants</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/FlowControlAndLoops.php" target="_blank"
                                    class="text-decoration-none">Control Flow And Loops</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/Functions.php" target="_blank"
                                    class="text-decoration-none">Functions in PHP</a></li>
                            <li><a href="http://localhost/PHP_Labs/PHP_Antics/ArrayManipulation.php" target="_blank"
                                    class="text-decoration-none">Array Manipulation</a></li>
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
                        <p></p>
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
        </main>
    </div>
</body>

</html>