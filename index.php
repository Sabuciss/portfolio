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
  echo"<h2>Faktoriāls</h2> <br>";
//Faktorils 10!
// 3! = 1 * 2 * 3
$ž = 1;
for ($f = 1; $f <= 10; $f= $f +1){
$ž= $ž * $f;
}
echo " $ž <br>";

echo"<h2>Saskaita visus naturālos skaiļus no 1 līdz 22</h2> <br>";
$b=0;
for ($s=1; $s <=22; $s++){
   $b= $b+$s;
}
echo " $b <br>";

echo"<h2>Saskaita visus Fibonači skaitļus, kas ir mazāki par 1000</h2> <br>";
$l_1 =0;

for ($l=1; $l<=1000; $l=$l + 0 ){
   echo "$l<br>";
   $lPlus1 = $l_1+ $l;
   $l_1 = $l; 
   $l = $lPlus1;
}

echo " while ciklss <br>";
$l_1 =0;
$l=1;
while ( $l<=1000){
   echo "$l<br>";
   $lPlus1 = $l_1+ $l;
   $l_1 = $l; 
   $l = $lPlus1;
}

//echo" <br>";
?>
