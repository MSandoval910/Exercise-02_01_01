<!doctype html>

<html>

<head>
    <!--
	Exercise 02_01_01
	Author: Mario Sandoval
	Date: 11 september 2018
	HelloWorld2.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
  <?php
    // Global variables, variable declarations
    // always start declaring a variable wit the $ symbol
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    // contants
    define("WORLD_INFO", 92897000);
    define("SUN_INFO",  72000000);
    define("MOON_INFO", 3456);
    
    // using the variables and calling the gloable variables
    echo "<p>Hello $worldVar!<br>";
    echo "the $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is ", number_format(MOON_INFO,0) ," miles in diameter.</p>";
    ?>
</body>

</html>