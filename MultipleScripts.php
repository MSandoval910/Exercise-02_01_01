<!doctype html>

<html>

<head>
    <!--
	Exercise 02_01_01
	Author: Mario Sandoval
	Date: 11 september 2018
	MultipleScript.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   // the echo calls which version of php i am using currentyl
    <h1>PHP Environment Info</h1>
    <p>This page was rendered with
        <?php
    echo phpversion();
    ?>
    // Zend verison engine im using
    </p>
    <p>This PHP code rendered with Zend engine version
        <?php
    echo zend_version();
    ?>
    // MIME type being used
    </p>
    <p>PHP's default MIME type is 
   <?php
    echo ini_get("default_mimetype");
    ?>
</p>
<p>The maximum allowable execution time of a PHP script is
   <?php
    echo ini_get("max_execution_time");
    ?>
</p>
</body>

</html>