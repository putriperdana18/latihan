<?php
function hitungumur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "assalamualaikum")
{
    echo $salam. " ,";
    echo "perkenalkan nama saya" . $nama . "<br/>";
    //memanggil fungsi
    echo "saya berusia ". hitungumur(2005, 2021). " tahun <br/>";
    echo "senang berkenalan dengan anda <br/>";
}
perkenalan(" putri");
?>