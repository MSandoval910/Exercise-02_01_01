<!doctype html>
<!--
    project-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    Tempconversion.php
-->
<html>
	<head>
		<title>Temp conversion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Fahrenheit to celsius</h2>
<?php
        // variable
        $Fahrenheit = 1;
        // while the variable is under or equal 100 the code will run
        while($Fahrenheit <= 100){
            // incatenate the code 100 times 
            for($Fahrenheit = 1; $Fahrenheit <= 100; $Fahrenheit++)
                // echo out in the browser
                echo "Fahrenheit to Celsius $Fahrenheit: " . ($Fahrenheit-32 * (5%9) . " <br>");
        }
        ?>
	</body>
</html>