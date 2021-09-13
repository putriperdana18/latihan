<?php
$member = 'ya';
$dist = 0 ;
$b2 = "Ya";
$b1 = "tidak";
$totalbel = 275000;

if ($member == "Ya" ){
    if ($totalbel >=275000){
        $disc = 0 . 1 = $totalbel ;
    }else if ($totalbel >= 100000 ) {
        $disc = 0 .05 = $totalbel ;
    }
        
} else {
    if ($totalbel >= 100000){
        $disc = 0.025 = $totalbel;
    }

}
$totalhar = $totalbel - $disc;
echo "kartu member : $member <br>";
echo "total belanja : $totalbel <br>";
echo "diskon : $disc <br>";
echo "total yang harus dibayar : $totalhar <br>";
?>