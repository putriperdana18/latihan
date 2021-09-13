<?php
if (isset($_POST['proses'])) {
 $nama = $_POST['nama'];
 $kelamin = $_POST['kelamin'];
 $agama = $_POST['agama'];
 $golongan = $_POST['golongan'];
 $jam = $_POST['jam'];
 $jamlembur = 0;
 $gajilembur = 0;
 $totalpajak = 0;
 $tunjangan = 0;
 $jamlembur = $jam - 173;
 if($jam >= 173){
  $lembur = ($jam - 173) *20000;
} else if ($jam <= 173){
   $lembur = $jam;
}
 if ($golongan == 1){
    $gajipokok=1500000; 
    $tunjangan=150000;
  }
else if ($golongan == 2){
    $gajipokok=2000000; 
    $tunjangan=200000;
  }
else if ($golongan == 3){
    $gajipokok=2500000; 
    $tunjangan=250000;
}
else if ($golongan == 4){
    $gajipokok=3000000; 
    $tunjangan=300000;
  }
else {
    echo "maaf anda bukan golongan kami";
}
$pajakgajipokok = $gajipokok * 0.5;
$pajakgajilembur = $gajilembur * 0.5;
$totalpajak = $pajakgajipokok + $pajakgajilembur;
$totalgaji = $gajipokok + $tunjangan + $gajilembur - $totalpajak;
 echo " <fieldset><h3>Selamat Datang</h3>";
 echo "<br>Nama : $nama";
 echo "<br>Jenis Kelamin : $kelamin";
 echo "<br>Agama: $agama";
 echo "<br>Golongan: $golongan";
 echo "<br>jumblah jam kerja= $jam";
 echo "<br>jumblah jam lembur= $jamlembur";
 echo "<br>gaji lembur = $gajilembur";
 echo "<br>pajak gaji pokok : $pajakgajipokok";
 echo "<br>pajak gaji lembur : $pajakgajilembur";
 echo "<br>total pajak: $totalpajak";
 echo "<br>tunjangan pengabdian: $tunjangan";
 echo "<br>total gaji : $totalgaji";
 echo " </fieldset>";
} 

?>