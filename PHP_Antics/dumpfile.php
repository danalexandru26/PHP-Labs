<!DOCTYPE HTML>



<html>

<head>
    <title>Dumpfile</title>
</head>

<body>
    <?php
    $integerArray = array(1, 2, 3, 4);

    $stringArray = array("Bella", "Maya", "Lucky");

    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    $tuple = array("Bella", 1, "Maya", 2, "Lucky", 3);

    $tuple_matrix = array(
        array("Bella", 10),
        array("Maya", 8),
        array("Lucky", 4)
    );

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 2; $col++) {
            echo "{$tuple_matrix[$row][$col]} ";
        }
        echo '<br>';
    }
    ?>
</body>

</html>