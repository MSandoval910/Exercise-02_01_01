<!doctype html>

<html>
<!--
    Exercise 02_01_01
    Author: Mario Sandoval 
    Date: 09.12.2018
    Operator.php
-->

	<head>
		<title>PHP environment</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Operators</h2>
<?php
        // addition 
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo '<p>$returnValue after addition: ' , $returnValue, "</p>";
                // Modulus
        $x = 3;
        $y = 2;
        $returnValue = $x % $y;
        echo '<p>$returnValue after modulus: ' , $returnValue, "</p>";
                // Modulus 
        $x = "Hello ";
        $y = "World";
        $x .= $y;
        echo '<p>$returnValue after operation: ' , $x, "</p>";
        ?>
	</body>
</html>