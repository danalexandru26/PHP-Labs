<!DOCTYPE HTML>

<html lang="en" data-bs-theme="dark">

<head>
    <title>PHP Form Labwork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/styling.css">
    <script src="../Scripts/onChangeScripts.js"></script>
</head>

<body style="font-size:18px;">
    <div class="container">
        <main>
            <div class="row pt-4">
                <aside class="col-2 d-none d-lg-block ps-4 my-4 pt-5">
                    <div class="position-sticky" style="top:4rem;">
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
                <div class="col-8 justify-content-center">
                    <h1 class="display-4 text-center" id="formIntroduction">PHP User Form</h1>
                    <hr>
                    <div>
                        <p>This page will contain the <code>PHP</code> user form and all the required user data
                            validation for successful data submissions and subsequent insertion in a data base. The form
                            will be reminiscent of another that was detailed in the tutoral pages on <code>HTML</code>
                            Forms.</p>
                    </div>
                    <div>
                        <h3 id="dataModel">Data Model</h3>
                        <p>The data our form will contain will be detailed thoroughly below, in terms of its attributes.
                        </p>
                        <ul>
                            <li>Ship Types
                                <ul>
                                    <li class="nestedType" id="civShips">Civilian</li>
                                    <li class="nestedType" id="milShips">Military</li>
                                </ul>
                            </li>
                        </ul>

                        <p>Both civilian and military ships can be separated into sub-categories based on their
                            characteristics and
                            roles. The following are common sub-categories:</p>

                        <ul>
                            <li>Civilian Ships
                                <ul>
                                    <li class="nestedType">Fuel Tankers</li>
                                    <li class="nestedType">Civilian Transport Vessels</li>
                                    <li class="nestedType">Cargo Freighters</li>
                                </ul>
                            </li>
                            <li>Military Ships
                                <ul>
                                    <li class="nestedType">Fighters</li>
                                    <li class="nestedType">Corvettes</li>
                                    <li class="nestedType">Frigates</li>
                                    <li class="nestedType">Destroyers</li>
                                    <li class="nestedType">Cruisers</li>
                                    <li class="nestedType">Carriers</li>
                                </ul>
                            </li>
                        </ul>

                        <p>Now that categories are defined, let's discuss the data fields used to describe these ships.
                            The most
                            significant fields are:</p>

                        <ul class="">
                            <li>Name - <span style="color:maroon">string</span></li>
                            <li>Hull characteristics
                                <ul>
                                    <li>Hull strength [absorption] - <span style="color:maroon">uint32</span></li>
                                    <li>Shield capacity [flux] - <span style="color:maroon">int64</span></li>
                                </ul>
                            </li>
                            <li>Cargo characteristics
                                <ul>
                                    <li>Cargo hold capacity [containers] - <span style="color:maroon">uint32</span></li>
                                    <li>Liquid fuel capacity [tonnes] - <span style="color:maroon">uint32</span></li>
                                </ul>
                            </li>
                            <li>Crew quarters
                                <ul>
                                    <li>Service Crew - <span style="color:maroon">uint16</span></li>
                                    <li>Marines (if applicable) - <span style="color:maroon">uint16</span></li>
                                </ul>
                            </li>
                            <li>Armament
                                <ul>
                                    <li>Weaponry output [mass/sec] - <span style="color:maroon">uint32</span></li>
                                    <li>Hardpoints [num] - <span style="color:maroon">uint16</span></li>
                                </ul>
                            </li>
                            <li>Engine
                                <ul>
                                    <li>Travel Speed [<span style="color:maroon">km/s</span>] - <span
                                            style="color:maroon">int64</span>
                                    </li>
                                    <li>Thrust [<span style="color:maroon">N</span>] - <span
                                            style="color:maroon">uint64</span></li>
                                    <li>Hyperspeed [<span style="color:maroon">ly/ys</span>] - <span
                                            style="color:maroon">uint32</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <h3 id="formProper">Form Body</h3>
                            <p>The complete fom proper can be found below.</p>
                            <div style="background-color:#1c1e23; color:#ECEFF4; padding:12px;">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="row justify-content-center text-center">
                                        <h3>Data Acquisition Form</h3>
                                        <p>Please enter data accordingly in the fields below</p>
                                        <div class="col-6">
                                            <label class="form-label" for="shipName">Ship Name</label>
                                            <input type="text" class="form-control" id="shipName" name="Name"
                                                placeholder="Xenorphica" required>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label" for="shipCategory">Ship Category</label>
                                            <select type="option" class="form-control" id="shipCategory" name="Category"
                                                onChange="shipCategoryChange()" required>
                                                <option value="civilian">Civilian</option>
                                                <option value="military">Military</option>
                                            </select>
                                        </div>
                                        <div class="col-12 my-2">
                                            <label for="shipType" class="form-label">Ship Type</label>
                                            <select type="option" class="form-control" id="shipType"
                                                name="Type"></select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-2 d-none d-lg-block ps-4">
                    <div class="position-sticky" style="top: 4rem">
                        <strong class="d-block my-2" style="color:grey">On this page</strong>
                        <hr>
                        <ul class="list-unstyled">
                            <li><a href="#formIntroduction">Introduction</a></li>
                            <li><a href="#dataModel">Data Model</a></li>
                            <li><a href="#formProper">Form Proper</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </main>
    </div>
</body>

</html>