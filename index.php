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
    <ul>
      <li>First list item</li>
      <li>Second list item</li>
      <li>Third list item</li>
      <li>Fourth list item</li>
      <li>Fifth list item</li>
    </ul>

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

        //If Statement
        $userName = "Amanda";
        if($userName == "Amanda") {
          echo "<br>I love you Amanda";
        }
        else {
          echo "You are not my spec";
        }

        //Variables
        $centralcomputer = "Works";

        //The switch statement is used to replace if/else statements that 
        //have multiple expressions with the same value. This command 
        //is more efficient and easier to read.

      ?>
    </p>
    <h4>Color recheck:</h4>
    <p class="phptag">
        <?php
          // Switch code goes below
          //Ans: The color is blue
          switch ("blue") {
            case "red":
              echo 'The color is red';
            break;
            case "blue":
              echo 'The color is blue';
            break;
            case "green":
              echo 'The color is green';
            break;
            default:
              echo "The color isn't red, blue or green";
          }
          //Second one
          $color = "Pink";
          switch ($color) {
            case "red":
              echo 'The color is red';
            break;
            case "blue":
              echo 'The color is blue';
            break;
            case "green":
              echo 'The color is green';
            break;
            default:
              echo "The color isn't red, blue or green";
          }
        ?>
      </p>
	</body>
</html>