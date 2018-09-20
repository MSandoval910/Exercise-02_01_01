<!doctype html>
<!--
    project-02_01_01
    Author: Mario Sandoval
    Date: 09.12.2018
    CoastCityComputers.php
-->
<html>
	<head>
		<title>Coast City Computers</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Memorial Day Sale</h2>
<!-- includes the header made out of the heading php file -->
<?php include("inc_header.php"); ?>
<!-- unordered list-->
<ul>
    <li>Compaq Presario m2007us Notebook:<strong>$799.99</strong></li>
    <li>Epson Stylus CX6600 color all-in-one printer, print/copy/scan:<strong>$699.99</strong></li>
    <li>Proview Technology Inc. KDS K715s 17-inch LCD Monitor, silver/black:<strong>$199.99</strong></li>
    <li>Hawking technology hi-speed wireless-AC Cardbus Card:<strong>$9.99</strong></li>
</ul>

<?php 
        // adds in the data from the file inc_footer.php and adds is to this page
        include("inc_footer.php"); 
        ?>
	</body>
</html>