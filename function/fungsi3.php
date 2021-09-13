<?php
function luassegitiga($a, $b)
{
    $alas = $a;
    $tinggi = $b;
    $luas =($alas * $tinggi) / 2;
    return $luas;
}

echo "Luas Segitiga =". luassegitiga(10 , 8)
?>