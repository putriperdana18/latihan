<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <FORM ACTION="" METHOD="POST" NAME="input">
 Masukan Bilangan : <input type="number" name="bilangan"><br>
 Masukan Pangkat : <input type="number" name="pangkat"><br>
 <input type="submit" name="Input" value="Input">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
 $bilangan = $_POST['bilangan'];
 $pangkat = $_POST['pangkat'];
}
function faktorial($bilangan){
    if($bilangan == 0){
        return $bilangan * faktorial($pangkat-1);
    }else{
        return $bilangan;
    }
}

$hasil = faktorial($bilangan,$pangkat);
echo $hasil;

 ?>
<!-- //
// function faktorial($n){
//     if($n>2){
//         return $n * faktorial($n-1);
//     }else{
//         return $n;
//     }
// }

// $hasil = faktorial(5);
// echo $hasil; -->