<!doctype html>

<html>

<head>
    <!--
	Exercise 02_01_01
	Author: Mario Sandoval
	Date: 11 september 2018
	diceroll.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
    <style>
        body{
            background-color: skyblue;
        }
        h2{
            color: darkred;
            font-size: 100px;
        }
    </style>
</head>

<body>
    <h2>Dice Roll</h2>
    <?php
    // global variables 
    // array
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    // second array
     $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    // more global variabes 
    $doublesCount = 0;
    $rollNumber = 1;
    define("NBR_ROLLS", 4);
    // function to check for the doubles
    function CheckForDoubles($die1,$die2){
       global $faceNamesSingular;
       global $faceNamesPlural;  
        $return = false;
       // echo too show up into the browser 
      echo "Die 1: $die1<br>Die 2: $die2<br>";
        
        // check for doubles 
        if($die1 === $die2){
            echo "The roll was double " . $faceNamesPlural[$die1 - 1] . ".<br>";
            $returnValue = true;
        }
        else{
            echo "The roll was a " . $faceNamesSingular[$die1 - 1] . " and a " . $faceNamesSingular[$die2 - 1] . ".<br>";
            $returnValue = false;
        }
        return $returnValue;
    }
    // funtion to display the score for possible senarios 
    function displayScoreText($score, $doubles){
        // if doubles are rolled then the if statement will execute
        if($doubles){
            switch ($score) {
        // what displays is a 2 is rolled 
                case 2:
            echo "You rolled snake eyes!<br>";
                    break;
        // what displays is a 12 is rolled 
            case 12:
            echo "You rolled boxcars!<br>";
            break;
            }
    }
        else{
        // what displays is a 3 is rolled 
         if($score === 3){
            echo "You rolled a loose deuce! <br>";
        }
        // what displays is a 5 is rolled 
           else if($score === 5){
            echo "You rolled a fever fiver! <br>";
        }
        // what displays is a 7 is rolled 
           else if($score === 7){
            echo "You rolled a natural! <br>";
        }
        // what displays is a 9 is rolled 
           else if($score === 9){
            echo "You rolled nina! <br>";
        }
        // what displays is a 11 is rolled 
           else if($score === 11){
            echo "You rolled a yo! <br>";
        }
        else {
            echo "Your roll has no nickname! <br>";
        }
    }
}
    
    // test for doubles in the browser
    $dice = array();
    while($rollNumber <= NBR_ROLLS){
         $dice[0] = rand(1,6);
    $dice[1] = rand(1,6);
    //variables
    echo "<p>";
    // checking the score 
    $score = $dice[0] + $dice[1];
    echo "The total score for the roll was $score.<br>";
    // checking for doubles
   $doubles = CheckForDoubles($dice[0], $dice[1]);
    displayScoreText($score, $doubles);
    echo "<p>";  
        if($doubles){
            ++$doublesCount;
        }
        ++$rollNumber;
    }
 echo "<p>Doubles occured on $doublesCount of the " . NBR_ROLLS .".</p>";
    ?>
</body>

</html>