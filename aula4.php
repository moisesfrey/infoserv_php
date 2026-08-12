<?php

$contador = 1;

for($contador = 0; $contador <=5; $contador++) {
     echo $contador . "<br>";
}

echo "<br>";

for ($contador = 5; $contador >=0; $contador--) {
    echo "<br>while:<br>";
}

$contador = 0; 

while($contador <= 5 ) {
    echo $contador . "<br>";
    $contador++;
}

$contador = 5; 

while($contador >= 0) {
    echo $contador . "<br>";
    $contador--;