<!doctype html>

<html>

<head>
    <!--
	Exercise 02_01_01
	Author: Mario Sandoval
	Date: 11 september 2018
	HelloWorld.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
 <h2>Variable Scope</h2>
  <?php
$globalVariable = "global variable";
    function scopeExample() {
        $localVariable = "local Variable";
        echo "<p>This is a $localVariable</p>";
    }
     function globalExample() {
        $localVariable = "local Variable";
        echo "<p>This is a $localVariable</p>";
    }
    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
    ?>
</body>

</html>