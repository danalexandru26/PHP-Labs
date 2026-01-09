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


    class Spaceship
    {
        public $name;
        private $anchorShipyard;

        public function __construct($name, $anchorShipyard)
        {
            $this->name = $name;
            $this->anchorShipyard = $anchorShipyard;
        }

        public function currentAnchor()
        {
            echo "The ship is docked at the following shipyard: $this->anchorShipyard";
        }

        public function dockShip($shipyard)
        {
            $this->anchorShipyard = $shipyard;
        }
    }

    $spaceshipName = "Ziggurat";
    $currentAnchor = "Eridani";
    $spaceship = new Spaceship($spaceshipName, $currentAnchor);

    var_dump($spaceship);

    $nullVAR;

    var_dump($nullVAR);

    $instantiatedNull = NULL;

    $stringData = "Hello World!";

    $stringData = NULL;

    var_dump($instantiatedNull);

    $nameString = "Bella";
    $nameArray = (array) $nameString;

    print $nameArray . '<br>';

    var_dump($nameArray);

    class Shipyard
    {
        public $piers;
        public $wharves;
        private $capacity;
        private $dockedShips;

        public function __construct($piers, $wharves, $capacity, $dockedShips)
        {
            $this->piers = $piers;
            $this->wharves = $wharves;

            $this->capacity = $capacity;

            $this->dockedShips = $dockedShips;
        }

        public function information()
        {
            echo "This shipyard has $this->piers piers, $this->wharves wharves, $this->capacity storage capacity, $this->dockedShips currently docked ships.<br>";
        }

        public function dockShip()
        {
            $this->dockedShips++;
        }

        public function undockShip()
        {
            if ($this->dockedShips > 0)
                $this->dockedShips--;
        }
    }

    $myShipyard = new Shipyard(10, 5, 1500, 0);

    $myShipyard->information();

    $castShipyard = (array) $myShipyard;

    var_dump($castShipyard);

    print $castShipyard . '<br>';

    $myFavoriteInteger = 69;

    print 'My favorite number is: ' . $myFavoriteInteger . '<br>';

    $myFavoriteInteger = NULL;

    var_dump($myFavoriteInteger);

    ?>
</body>

</html>