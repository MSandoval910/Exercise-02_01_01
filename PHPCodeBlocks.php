<!doctype html>
<!--
   Exercise 02_01_01
    Author: Mario Sandoval
    Date: 10 September 2018
    
    PHPCodeBlocks.php
-->

<html>

<head>
    <title>PHP Code Blocks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <?php
        echo "This text is displayed using standard PHP script delimiters.<br>";
        print "Second string<br>";
        print ("Third string");
        echo "<h1>This is a" , " multiple argument string</h1>";
        echo ("<h1>This is another" . " multiple argument string</h1>");
        print("<h2>This is some math: " . (2+3). "<h2>");
    ?>
    </p>
</body>

</html>