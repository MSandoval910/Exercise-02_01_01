<!doctype html>
<!--
    project-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    OddNumbers.php
-->
<html>

<head>
    <title>Odd Numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <?php
    // variable
        $x = 1;
    // while the variable is in the range 1 to 100 the code will execute
        while($x <= 100){
            // each time the variable will add by 2 and will stop once it reaches or passes 100
          for ($x=1; $x<=100; $x+=2){
       // prints out in the browser
        echo $x." ";
    }  
        }
?>

</body>

</html>