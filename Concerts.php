<!doctype html>

<html>

<head>
    <!--
	Exercise 02_01_01
	Author: Mario Sandoval
	Date: 11 september 2018
	Concerts.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    // variables in an array
    $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    $concerts[] = "Bob dylan";
    $concerts[] = "Joan Jett";
    // calliing in the array using the count api
    echo "<p>The following ", count($concerts), " concerts are schedules.</p>";
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
       echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
    ?>
</body>

</html>