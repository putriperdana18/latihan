<?php
for($i=0; $i < 5; $i++){
    for ($j = 0; $j < 10; $j++){
        echo "ini perulangan isi ($i , $j)";
    }
}
//while 
echo "<hr>";
$i = 0;
while ($i < 10){
    for (
        $j = 0; $j < 10; $j++){
        echo "ini perulangan ke ($i , $j)";
    }
    $i++;
}
?>