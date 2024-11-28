<?php
echo "<style>
body{
background-color: #8e809c;
color: #c3c8e3 ;
}
</style>";

echo "All good <br>"; 
 /*ko dara %
 4 % 5 =  atgriež 1
 13 % 5 = atgriež 3 atlikumu
 
 */

 echo"<h2>for loop</h2> <br>";
for ($x = 2; $x <= 100; $x+=2) {
    echo " $x <br>";
  }
  echo"<h2>while loop</h2> <br>";
  $y = 1;
  while($y <= 100){
     if($y % 2 == 0){
        echo " $y <br>";
     }
     $y = $y + 1 ;
  }

?>
