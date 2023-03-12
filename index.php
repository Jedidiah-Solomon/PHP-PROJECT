<?php
$spaceshipName = "BitDegree";
$destination = "Minna"; 
$distance = 3500;
?>
<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="./assest/SASS/styles.css"/>
    <title>BitDegree Spaceship Project</title>
	</head>
	<body>
    <p>
      <h1>Project name: PHP Practice</h1>
      <?php
      // Your code goes below inside of quotes
      echo "The BitDegree Spaceship Project. "; 
      ?>
    </p>
    <p class="phptag">
      <?php
        echo "I am Loving PHP"; 
        echo "<br> Welcome" . " " . "to the Spaceship" . "!";
        echo "<br> Welcome" . " " . "to the Spaceship" . "! <br>";
        echo 5 * 3;
        echo "<br>";
        //Variables declaration
        $spaceshipName = "Jedybrown";
        $distance = 3500;
        //This is a comment
        //Output also
        echo $destination;
        echo $distance;
        //If statement
        $word = 10;
        if( $word > 9 ) {
          echo "<br>This is a long word!";
        }
        else {
          echo "<br>This is a short word!";
        }
      ?>
    </p>
	</body>
</html>