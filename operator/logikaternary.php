<?php
    $nilai = 85;
    $nilaia = 81;
    $akademik = $nilai < 84 ;
    $atletik= $nilaia < 83;
    $jawab = $nilai >= 85 && $nilaia >=83 
     ? "lulus" : "tidak lulus";
    echo "nilai akademik :". $nilai . "<br>";
    echo "nilai atletik :". $nilaia . "<br>";
    echo "Dinyatakan :". $jawab;

    
?>