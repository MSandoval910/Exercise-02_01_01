<!doctype html>
<!--
    Exercise-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    DaysArray.php
-->
<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"
		    
		></script>
	</head>

	<body>
<h1>Days array</h1>
  <?php
   $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
   $days2 = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "The days of the week in english <br>";
    echo "$days[0]<br>";
    echo "$days[1]<br>";
    echo "$days[2]<br>";
    echo "$days[3]<br>";
    echo "$days[4]<br>";
    echo "$days[5]<br>";
    echo "$days[6]</p>";
    echo "The days of the week in French<br>";
    echo "$days2[0]<br>";
    echo "$days2[1]<br>";
    echo "$days2[2]<br>";   
    echo "$days2[3]<br>";
    echo "$days2[4]<br>";
    echo "$days2[5]<br>";
    echo "$days2[6]<br>";
     
  ?>   

	</body>
</html>