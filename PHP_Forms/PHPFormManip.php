<!DOCTYPE HTML>

<html lang="en" data-bs-theme="dark">

<head>
    <title>PHP Forms and Superglobals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <main>
            <div class="row justify-content-center my-4">
                <div class="col-8">
                    <h1 class="display-4 text-center">
                        PHP Forms and Superglobals
                    </h1>
                    <hr>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-8">
                        <h3>Introduction to PHP Forms</h3>
                        <p>The term <em>PHP Forms</em> can be a bit misleading, especially since it does not
                            wholly refer to a different entity when compared with <em>HTML Forms</em>. A PHP Form is not
                            a completely different form entity, but a method of capturing and dispatching the user input
                            down our web page's data hierarchy. Conclusively, it's more accurate to call them
                            PHP-embedded forms or PHP-handled forms. It is precisely the handling part that we are
                            interested in the most.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3>Superglobal Variables</h3>
                        <p>The data we want to send to a form handler is collected, at run-time, in either one of the
                            two
                            following <em>superglobal</em> variables:</p>
                        <ul>
                            <li><code>$_GET</code>, used to collect data for the HTTP GET method.</li>
                            <li><code>$_POST</code>, used to collect data for the HTTP POST method.</li>
                        </ul>
                        <p>There are many more superglobal variables that PHP makes available to the user. The complete
                            list can be found here <a
                                href="https://www.php.net/manual/en/language.variables.superglobals.php" target="_blank"
                                style="text-decoration:none;"> PHP Superglobals</a>.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3>GET vs. POST</h3>
                        <p>While <code>get</code> and <code>post</code> can, for the most part, be used to accomplish
                            similar functions, there are some fundamental differences that we need address. Being
                            mindful of these differences will help improve our web-page workflow and make them more
                            secure.</p>
                        <p>Both GET and POST create an associative array (e.g. array( key1 => value1, key2 => value2,
                            key3 =>
                            value3, ...)). This array holds key/value pairs, where keys are the names of the form
                            controls and values are the input data from the user.</p>
                        <p>$_GET is an array of variables passed to the current script via the URL query parameters.</p>
                        <p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3>Using GET</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3>Using POST</h3>
                    </div>
                </div>

        </main>
    </div>
</body>

</html>