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

    $shipClass = "Frigate";

    if ($shipClass == "Frigate") {
        print "Everybody knows frigates are faster than destroyers";
    }

    $shipClass2 = "Destroyer";

    if ($shipClass2 == "Frigate") {
        print "Everybody knows that frigates are not as swift as corvettes";
    } elseif ($shipClass2 == "Destroyer") {
        print "Destroyers are the kings of the open oceans";
    } else {
        print "You're the captain of a ragtag raft";
    }

    $cardValue = 3;

    switch ($cardValue) {
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

    if ($cardValue == 1) {
        print "You lost!";
    } elseif ($cardValue == 2) {
        print "So close yet not there!";
    } elseif ($cardValue == 3) {
        print "You're victorious!";
    } else {
        print "Your card's value is out of the accepted range!";
    }

    $whileCondition = 5;

    while ($whileCondition > 0) {
        $whileCondition -= 1;
        print 'Current condition value: ' . $whileCondition . '&lt;br&gt;';
    }

    print '&lt;br&gt;';
    $doWhileCondition = 1;

    do {
        print 'Current condition value: ' . $doWhileCondition . '&lt;br&gt;';
        $doWhileCondition += 1;

    } while ($doWhileCondition < 1);

    print '&lt;br&gt;';

    for ($x = 0; $x < 5; $x++) {
        print 'Current &lt;em&gt;for&lt;/em&gt; condition value: ' . $x . '&lt;br&gt;';
    }

    print '&lt;br&gt;';

    $sampleArray = array(1, 2, 3, 4, 5);

    foreach ($sampleArray as $value) {
        print 'Current value: ' . $value . '&lt;br&gt;';
    }

    //void function
    function displayName($firstName, $lastName)
    {
        print 'First name: ' . $firstName . ' Last name: ' . $lastName . '&lt;br&gt;';
    }


    //returning function
    
    function computeSum($a, $b)
    {
        return $a + $b;
    }

    //returning function with explicit retunr type declaration
    
    function comuputeSumExplicit($a, $b): int
    {
        return $a + $b;
    }

    //default parameter value
    function defaultValue($a = 50)
    {
        print 'If there is no passed variable, the default will be printed: ' . $a . ' &lt;br&gt;';
    }

    //Sum function a varidic number of arguments
    function varidicSum(...$a)
    {
        $values = count($a);
        $sum = 0;

        for ($x = 0; $x < $values; $x++) {
            $sum += $a[$x];
        }

        return $sum;
    }

    //passing by reference
    function passByReference(&$a)
    {
        $a += 10;
    }
    ?>
</body>

</html>