<!doctype html>
<!--
    project-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    GasPrices.php
-->
<html>
	<head>
		<title>Gas Prices</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Gas Prices</h2>
<?php
        // variables
        $gasPrice = 2.57;
        // if the price is under two dollars
        if($gasPrice <= 2){
          echo "<p> Gas prices are less then $2.00.</p>";  
        }
        // if the price is under three dollars
            if($gasPrice <= 3){
                echo "<p> Gas prices are less then $3.00</p>";
            }else{
                // else for between 2 and 3 dollars
                echo "<p> Gas prices are higher then $3.00.</p>";
            }
        
        
        ?>
	</body>
</html>