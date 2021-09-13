<?php
echo "No 1<br>";
$kot = 0;
for ($i =1; $i <= 5; $i++) {
    $kot += 1;  
    for ($j = 1; $j <= 5; $j++){
        echo $j + $kot. " ";
    }
echo "<br>";
}
echo "<hr>";



echo "No 2<br>";
$pir = 0;
for ($i =1; $i <= 10; $i++) {
    $pir += 2;  
    for ($j = 1; $j <= $i; $j++){
        echo $j + $pir. " ";
    }
echo "<br>";
}


?>