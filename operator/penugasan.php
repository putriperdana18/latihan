<?php
    $uang = 100000;
    $minum =  15000;
    $sosis =  25000;
    $nemu = 50; 
    $sedekah = 10;
    
    echo "uang ucup = $uang";
    echo "<hr>";
    $uang -= $minum;
    echo "jajan minum 15000 <br>";
    echo "sisa uang ucup jajan minum = $uang";
    echo "<hr>";
    $uang -= $sosis;
    echo "jajan sosis bakar 25000 <br>";
    echo "sisa uang ucup jajan sosis bakar + minum = $uang";
    echo "<hr>";
    $uang -= 60000 * $sedekah / 100;
    echo "sedekah ke musafir 10% dari 60000 yaitu sebesar 6000 <br>";
    echo "sisa uang ucup = $uang";
    echo "<hr>";
    $nemuuang = $uang * $nemu / 100;
    echo "nemu uang dijalan 50% dari sisa uang ucup $uang sebesear $nemuuang<br>";
    echo "sisa uang ucup = $nemuuang + $uang";
    echo "<hr>";
    $uang += $nemuuang;
    echo "total uang ucup = $uang";
    echo "<hr>";


?>