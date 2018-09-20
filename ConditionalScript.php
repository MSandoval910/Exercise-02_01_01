<!doctype html>

<html>
	<head>
		<title>Conditional Script</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Conditional Script</h2>
<?php
        // variables        
        $intVariable = 100;
        $result = "";
        // if statement to check to see if the $intvariable is less then or if it is equals too 100
        if($intVariable > 100){
        // echo is what is going to show on the browser 
        echo "$intVariable is greater than 100";
        }
        else{
        echo "intVariable is less than or equals to 100";
        }
        // before the if statement
        //($intVariable > 100) ? $result = '$intVariable is greater than 100': $result = 'intVariable is less than or equal to 100';
        //echo '<h3>$result: '. "$result</h3>";
        ?>
	</body>
</html>