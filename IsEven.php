<!doctype html>
<!--
    project-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    isEven.php
-->
<html>

<head>
    <title>isEven.php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
  <h2>Is Even</h2>
  <?php
    // variable
    $counter = 0;
    // checking the variable to see if it is less then or equals 100 to run 
    while($counter <= 100){
        // put the numbers in an array and incatenates
        $numbers[] = $counter;
        ++$counter;
    }
  // each number in the array is set to the variable $currentNum and then echoed out to the browser
    foreach($numbers as $currentNum){
        echo "$currentNum<br>";
    }
    
    ?>
</body>

</html>