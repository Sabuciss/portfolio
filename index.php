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
    echo " $x ";
  }
  echo"<h2>while loop</h2> <br>";
  $y = 1;
  while($y <= 100){
     if($y % 2 == 0){
        echo " $y ";
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
echo " $ž ";

echo"<h2><br>Saskaita visus naturālos skaiļus no 1 līdz 22</h2><br> <br>";
$b=0;
for ($s=1; $s <=22; $s++){
   $b= $b+$s;
}
echo " $b  ";

echo"<h2><br>Saskaita visus Fibonači skaitļus, kas ir mazāki par 1000</h2> <br><br>";
$l_1 =0;

for ($l=1; $l<=1000; $l=$l + 0 ){
   echo "$l<br>";
   $lPlus1 = $l_1+ $l;
   $l_1 = $l; 
   $l = $lPlus1;
}

echo "<br> while ciklss <br><br>";
$l_1 =0;
$l=1;
while ( $l<=1000){
   echo "$l<br>";
   $lPlus1 = $l_1+ $l;
   $l_1 = $l; 
   $l = $lPlus1;
}

//echo" <br>";
echo " <br>Izvada nat. skaitus 1-100 kas dals ar 3 un 5 bet nedeals ar 15 <br><br>";
for($s=1; $s<=100; $s++){
   if($s % 3 == 0 && $s != 15|| $s % 5== 0 && $s != 15){//(($s % 3 == 0 && $s != 15|| $s % 5== 0 && $s != 15)) - lai neignorētu || darbību
      echo "$s ";
   }
}

echo " <br>izveido asociatīvo masīvu, kurā atslēgas ir Latvijas pilsētu nosaukumi, bet vērtības ir to iedzīvotāju skaits.<br><br>";
$pilsetas = array("Cēsis"=>14699, "Valmiera"=>22376, "Liepāja"=>66680,"Rīga"=>605273);
print_r($pilsetas);

echo " <br>izveido asociatīvo masīvu, kurā atslēgas ir dažādu dzīvnieku nosaukumi, bet vērtības ir to skaņas.<br><br>";

$dzivnieki = array("Kaķis"=>"mjau", "Suns"=>"vau", "Putns"=>"Čiv");
print_r(array_keys($dzivnieki));

echo " <br><br> izsauc API https://jsonplaceholder.typicode.com/posts un iegūst masīvu ar asociatīvajiem masīviem, kas satur informāciju par ziņojumiem. Izvadiet katram ziņojumam tā nosaukumu, saturu un lietotāja ID, kas to ir izveidojis.<br><br>";

$dataString = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$posts = json_decode($dataString);
//var_dump($posts);
//var_dump($posts[69]->title);//ierakstot pie posts [] iekavās ciparu, izvadīs komkrēto skaitļa tekstu
foreach($posts as $❤){
 echo"<h2>$❤->title</h2>";
 echo"<p>$❤->body</p>";
}

?>
